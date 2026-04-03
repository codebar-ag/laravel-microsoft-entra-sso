<?php

namespace CodebarAg\MicrosoftEntraSSO\Services;

use CodebarAg\MicrosoftEntraSSO\Contracts\Provider;
use CodebarAg\MicrosoftEntraSSO\Data\SSOToken;
use CodebarAg\MicrosoftEntraSSO\Data\SSOUser;
use CodebarAg\MicrosoftEntraSSO\Exceptions\SSOException;
use CodebarAg\MicrosoftEntraSSO\Exceptions\TokenExchangeException;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class MicrosoftOAuthService implements Provider
{
    protected string $authorizeEndpoint;

    protected string $tokenEndpoint;

    protected string $graphEndpoint = 'https://graph.microsoft.com/v1.0/me';

    protected bool $stateless = false;

    /**
     * @param  array<int, string>  $scopes
     * @param  array<string, mixed>  $http
     */
    public function __construct(
        protected ?string $tenantId,
        protected ?string $clientId,
        protected ?string $clientSecret,
        protected ?string $redirectUri,
        protected array $scopes = [],
        protected array $http = [],
    ) {
        $tenant = $this->tenantId ?: 'common';
        $this->authorizeEndpoint = "https://login.microsoftonline.com/{$tenant}/oauth2/v2.0/authorize";
        $this->tokenEndpoint = "https://login.microsoftonline.com/{$tenant}/oauth2/v2.0/token";
        $this->validateConfiguration();
    }

    public function stateless(bool $stateless = true): static
    {
        $this->stateless = $stateless;

        return $this;
    }

    public static function generateState(): string
    {
        return Str::random(40);
    }

    public static function generateCodeVerifier(): string
    {
        return Str::random(128);
    }

    public static function generateCodeChallenge(string $codeVerifier): string
    {
        return rtrim(strtr(base64_encode(hash('sha256', $codeVerifier, true)), '+/', '-_'), '=');
    }

    public function getAuthorizationUrl(string $state, string $codeVerifier): string
    {
        $this->validateConfiguration();

        $params = [
            'client_id' => $this->clientId,
            'response_type' => 'code',
            'redirect_uri' => $this->redirectUri,
            'response_mode' => 'query',
            'scope' => implode(' ', $this->scopes),
            'state' => $state,
            'code_challenge' => static::generateCodeChallenge($codeVerifier),
            'code_challenge_method' => 'S256',
            'prompt' => 'select_account',
        ];

        return $this->authorizeEndpoint.'?'.http_build_query($params);
    }

    public function exchangeCodeForTokens(string $code, string $codeVerifier): SSOToken
    {
        if ($codeVerifier === '') {
            throw TokenExchangeException::missingCodeVerifier();
        }

        $payload = [
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'code' => $code,
            'redirect_uri' => $this->redirectUri,
            'grant_type' => 'authorization_code',
            'code_verifier' => $codeVerifier,
            'scope' => implode(' ', $this->scopes),
        ];

        $response = $this->httpClient()->asForm()->post($this->tokenEndpoint, $payload);

        if ($response->failed()) {
            $body = $response->json();
            if (! is_array($body)) {
                $body = [];
            }
            $error = $body['error'] ?? 'unknown_error';
            $description = $body['error_description'] ?? '';

            throw TokenExchangeException::failed(
                is_string($error) ? $error : 'unknown_error',
                is_string($description) ? $description : '',
            );
        }

        $data = $response->json();
        if (! is_array($data)) {
            throw TokenExchangeException::failed(
                'invalid_token_response',
                'The token response was not valid JSON.',
            );
        }

        return SSOToken::fromArray(self::jsonAsAssoc($data));
    }

    public function getUserFromToken(string $accessToken): SSOUser
    {
        $response = $this->httpClient()
            ->withToken($accessToken)
            ->get($this->graphEndpoint);

        if ($response->failed()) {
            throw TokenExchangeException::failed(
                'graph_api_error',
                'Failed to retrieve user profile from Microsoft Graph.',
            );
        }

        $data = $response->json();
        if (! is_array($data)) {
            throw TokenExchangeException::failed(
                'invalid_user_response',
                'Microsoft Graph returned invalid JSON.',
            );
        }

        return SSOUser::fromGraphPayload(self::jsonAsAssoc($data));
    }

    public function refreshAccessToken(string $refreshToken): SSOToken
    {
        $response = $this->httpClient()->asForm()->post($this->tokenEndpoint, [
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'refresh_token' => $refreshToken,
            'grant_type' => 'refresh_token',
            'scope' => implode(' ', $this->scopes),
        ]);

        if ($response->failed()) {
            $body = $response->json();
            if (! is_array($body)) {
                $body = [];
            }
            $error = $body['error'] ?? 'unknown_error';
            $description = $body['error_description'] ?? '';

            throw TokenExchangeException::failed(
                is_string($error) ? $error : 'unknown_error',
                is_string($description) ? $description : '',
            );
        }

        $data = $response->json();
        if (! is_array($data)) {
            throw TokenExchangeException::failed(
                'invalid_token_response',
                'The token response was not valid JSON.',
            );
        }

        return SSOToken::fromArray(self::jsonAsAssoc($data));
    }

    public function getRedirectUri(): ?string
    {
        return $this->redirectUri;
    }

    public function setRedirectUri(string $uri): static
    {
        $this->redirectUri = $uri;
        $this->validateRedirectUri();

        return $this;
    }

    protected function validateConfiguration(): void
    {
        foreach (['tenant_id' => $this->tenantId, 'client_id' => $this->clientId, 'client_secret' => $this->clientSecret] as $key => $value) {
            if (! is_string($value) || $value === '') {
                throw SSOException::configurationMissing($key);
            }
        }

        $this->validateRedirectUri();
    }

    protected function validateRedirectUri(): void
    {
        if (! is_string($this->redirectUri) || $this->redirectUri === '') {
            throw SSOException::configurationMissing('redirect_uri');
        }

        if (! filter_var($this->redirectUri, FILTER_VALIDATE_URL)) {
            throw SSOException::invalidRedirectUri($this->redirectUri);
        }

        $allowedHosts = config('microsoft-entra-sso.allowed_redirect_hosts', []);
        if (! is_array($allowedHosts) || $allowedHosts === []) {
            return;
        }

        $hosts = [];
        foreach ($allowedHosts as $h) {
            if (is_string($h) && $h !== '') {
                $hosts[] = $h;
            }
        }

        $host = parse_url($this->redirectUri, PHP_URL_HOST);
        if (! is_string($host) || $host === '' || ! in_array($host, $hosts, true)) {
            throw SSOException::invalidRedirectUri($this->redirectUri);
        }
    }

    protected function httpClient(): PendingRequest
    {
        $timeout = $this->intHttpValue('timeout', 10);
        $connectTimeout = $this->intHttpValue('connect_timeout', 5);
        $retryTimes = $this->intHttpValue('retry_times', 1);
        $retrySleep = $this->intHttpValue('retry_sleep_ms', 200);

        return Http::timeout($timeout)
            ->connectTimeout($connectTimeout)
            ->retry($retryTimes, $retrySleep)
            ->acceptJson();
    }

    private function intHttpValue(string $key, int $default): int
    {
        $v = $this->http[$key] ?? config("microsoft-entra-sso.http.{$key}", $default);
        if (is_int($v)) {
            return $v;
        }
        if (is_numeric($v)) {
            return (int) $v;
        }

        return $default;
    }

    /**
     * @return array<string, mixed>
     */
    private static function jsonAsAssoc(mixed $data): array
    {
        if (! is_array($data)) {
            return [];
        }
        $out = [];
        foreach ($data as $key => $value) {
            if (is_string($key)) {
                $out[$key] = $value;
            }
        }

        return $out;
    }
}
