<?php

namespace CodebarAg\MicrosoftEntraSSO\Services;

use CodebarAg\MicrosoftEntraSSO\Exceptions\TokenExchangeException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class MicrosoftOAuthService
{
    protected string $authorizeEndpoint;

    protected string $tokenEndpoint;

    protected string $graphEndpoint = 'https://graph.microsoft.com/v1.0/me';

    public function __construct(
        protected ?string $tenantId,
        protected ?string $clientId,
        protected ?string $clientSecret,
        protected ?string $redirectUri,
        protected array $scopes = [],
    ) {
        $tenant = $this->tenantId ?: 'common';
        $this->authorizeEndpoint = "https://login.microsoftonline.com/{$tenant}/oauth2/v2.0/authorize";
        $this->tokenEndpoint = "https://login.microsoftonline.com/{$tenant}/oauth2/v2.0/token";
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

    public function exchangeCodeForTokens(string $code, string $codeVerifier): array
    {
        $response = Http::asForm()->post($this->tokenEndpoint, [
            'client_id' => $this->clientId,
            'client_secret' => $this->clientSecret,
            'code' => $code,
            'redirect_uri' => $this->redirectUri,
            'grant_type' => 'authorization_code',
            'code_verifier' => $codeVerifier,
            'scope' => implode(' ', $this->scopes),
        ]);

        if ($response->failed()) {
            $body = $response->json();

            throw TokenExchangeException::failed(
                $body['error'] ?? 'unknown_error',
                $body['error_description'] ?? '',
            );
        }

        return $response->json();
    }

    public function getUserFromToken(string $accessToken): array
    {
        $response = Http::withToken($accessToken)
            ->get($this->graphEndpoint);

        if ($response->failed()) {
            throw TokenExchangeException::failed(
                'graph_api_error',
                'Failed to retrieve user profile from Microsoft Graph.',
            );
        }

        $data = $response->json();

        return [
            'id' => $data['id'],
            'name' => $data['displayName'] ?? '',
            'email' => $data['mail'] ?? $data['userPrincipalName'] ?? '',
            'job_title' => $data['jobTitle'] ?? null,
            'department' => $data['department'] ?? null,
            'raw' => $data,
        ];
    }

    public function refreshAccessToken(string $refreshToken): array
    {
        $response = Http::asForm()->post($this->tokenEndpoint, [
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

        return $response->json();
    }

    public function getRedirectUri(): ?string
    {
        return $this->redirectUri;
    }

    public function setRedirectUri(string $uri): static
    {
        $this->redirectUri = $uri;

        return $this;
    }
}
