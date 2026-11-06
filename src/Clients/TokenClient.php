<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Clients;

use Carbon\CarbonImmutable;
use CodebarAg\MicrosoftEntraSSO\Config\EntraConfig;
use CodebarAg\MicrosoftEntraSSO\Exceptions\TokenException;
use CodebarAg\MicrosoftEntraSSO\Identity\Tokens;
use CodebarAg\MicrosoftEntraSSO\Support\Payload;
use SensitiveParameter;

/**
 * Talks to the Entra token endpoint: authorization code exchange and refresh.
 */
final readonly class TokenClient
{
    public function __construct(
        private HttpClient $http,
        private EntraConfig $config,
    ) {}

    /**
     * @throws TokenException
     */
    public function exchangeCode(#[SensitiveParameter] string $code, #[SensitiveParameter] string $codeVerifier, string $redirectUri): Tokens
    {
        return $this->post([
            'grant_type' => 'authorization_code',
            'code' => $code,
            'code_verifier' => $codeVerifier,
            'redirect_uri' => $redirectUri,
        ]);
    }

    /**
     * @throws TokenException
     */
    public function refresh(#[SensitiveParameter] string $refreshToken): Tokens
    {
        return $this->post([
            'grant_type' => 'refresh_token',
            'refresh_token' => $refreshToken,
        ])->keepingRefreshToken($refreshToken);
    }

    /**
     * @param  array<string, string>  $grant
     *
     * @throws TokenException
     */
    private function post(array $grant): Tokens
    {
        $response = $this->http->request()->asForm()->post(
            "https://login.microsoftonline.com/{$this->config->tenant->value}/oauth2/v2.0/token",
            $grant + [
                'client_id' => $this->config->clientId,
                'client_secret' => $this->config->clientSecret,
                'scope' => implode(' ', $this->config->scopes),
            ],
        );

        $body = Payload::assoc($response->json());

        if ($response->failed()) {
            throw TokenException::rejected(
                Payload::string($body['error'] ?? null) ?? 'unknown_error',
                Payload::string($body['error_description'] ?? null) ?? '',
            );
        }

        $accessToken = Payload::string($body['access_token'] ?? null)
            ?? throw TokenException::invalidResponse('no access token.');

        $expiresIn = $body['expires_in'] ?? null;

        return new Tokens(
            accessToken: $accessToken,
            refreshToken: Payload::string($body['refresh_token'] ?? null),
            expiresAt: is_numeric($expiresIn) ? CarbonImmutable::now()->addSeconds((int) $expiresIn) : null,
            scopes: preg_split('/[\s,]+/', trim(Payload::string($body['scope'] ?? null) ?? ''), -1, PREG_SPLIT_NO_EMPTY) ?: [],
            idToken: Payload::string($body['id_token'] ?? null),
        );
    }
}
