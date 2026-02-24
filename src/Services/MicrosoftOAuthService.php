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

            throw TokenExchangeException::failed(
                $body['error'] ?? 'unknown_error',
                $body['error_description'] ?? '',
            );
        }

        return SSOToken::fromArray($response->json());
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

        return SSOUser::fromGraphPayload($response->json());
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

            throw TokenExchangeException::failed(
                $body['error'] ?? 'unknown_error',
                $body['error_description'] ?? '',
            );
        }

        return SSOToken::fromArray($response->json());
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

        $host = parse_url($this->redirectUri, PHP_URL_HOST);
        if (! is_string($host) || $host === '' || ! in_array($host, $allowedHosts, true)) {
            throw SSOException::invalidRedirectUri($this->redirectUri);
        }
    }

    protected function httpClient(): PendingRequest
    {
        $timeout = (int) ($this->http['timeout'] ?? config('microsoft-entra-sso.http.timeout', 10));
        $connectTimeout = (int) ($this->http['connect_timeout'] ?? config('microsoft-entra-sso.http.connect_timeout', 5));
        $retryTimes = (int) ($this->http['retry_times'] ?? config('microsoft-entra-sso.http.retry_times', 1));
        $retrySleep = (int) ($this->http['retry_sleep_ms'] ?? config('microsoft-entra-sso.http.retry_sleep_ms', 200));

        return Http::timeout($timeout)
            ->connectTimeout($connectTimeout)
            ->retry($retryTimes, $retrySleep)
            ->acceptJson();
    }
}
