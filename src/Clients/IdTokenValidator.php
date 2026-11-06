<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Clients;

use CodebarAg\MicrosoftEntraSSO\Config\EntraConfig;
use CodebarAg\MicrosoftEntraSSO\Exceptions\InvalidIdTokenException;
use CodebarAg\MicrosoftEntraSSO\Identity\EntraIdentity;
use CodebarAg\MicrosoftEntraSSO\Identity\IdTokenClaims;
use CodebarAg\MicrosoftEntraSSO\Support\Guid;
use CodebarAg\MicrosoftEntraSSO\Support\Payload;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use InvalidArgumentException;
use SensitiveParameter;
use Throwable;

/**
 * Validates Microsoft Entra v2.0 id tokens (RS256 only): signature, issuer vs. tenant,
 * audience, expiry, nonce and the configured directory.
 */
final readonly class IdTokenValidator
{
    public function __construct(
        private JwksClient $jwks,
        private EntraConfig $config,
    ) {}

    /**
     * @throws InvalidIdTokenException
     */
    public function validate(#[SensitiveParameter] string $idToken, string $expectedNonce): IdTokenClaims
    {
        $header = $this->header($idToken);
        $kid = Payload::string($header['kid'] ?? null);

        if (($header['alg'] ?? null) !== 'RS256') {
            throw InvalidIdTokenException::because('it must be signed with RS256.');
        }
        if ($kid === null) {
            throw InvalidIdTokenException::because('its header has no key id.');
        }

        return $this->check($this->decode($idToken, $this->jwks->key($kid)), $expectedNonce);
    }

    /**
     * @return array<string, mixed>
     */
    private function header(string $idToken): array
    {
        $parts = explode('.', $idToken);
        if (count($parts) !== 3) {
            throw InvalidIdTokenException::because('it is malformed.');
        }

        $json = base64_decode(strtr($parts[0], '-_', '+/'), true);
        $header = $json === false ? [] : Payload::assoc(json_decode($json, true));

        if ($header === []) {
            throw InvalidIdTokenException::because('its header is malformed.');
        }

        return $header;
    }

    /**
     * @return array<string, mixed>
     */
    private function decode(string $idToken, Key $key): array
    {
        $previousLeeway = JWT::$leeway;
        JWT::$leeway = $this->config->idToken->leewaySeconds;

        try {
            $decoded = JWT::decode($idToken, $key);
        } catch (Throwable $e) {
            throw InvalidIdTokenException::because($e->getMessage());
        } finally {
            JWT::$leeway = $previousLeeway;
        }

        return Payload::assoc(json_decode((string) json_encode($decoded), true));
    }

    /**
     * @param  array<string, mixed>  $claims
     */
    private function check(array $claims, string $expectedNonce): IdTokenClaims
    {
        $tid = Payload::string($claims['tid'] ?? null);
        if ($tid === null || ! Guid::isValid($tid)) {
            throw InvalidIdTokenException::because('it has no valid tenant id.');
        }

        if (($claims['iss'] ?? null) !== "https://login.microsoftonline.com/{$tid}/v2.0") {
            throw InvalidIdTokenException::because('its issuer does not match its tenant.');
        }

        $audience = $claims['aud'] ?? null;
        if (! in_array($this->config->clientId, is_array($audience) ? $audience : [$audience], true)) {
            throw InvalidIdTokenException::because('its audience does not match the client id.');
        }

        if (! is_numeric($claims['exp'] ?? null)) {
            throw InvalidIdTokenException::because('it has no expiry.');
        }

        if ($this->config->tenant->isSingleDirectory() && $this->config->tenant->value !== Guid::normalize($tid)) {
            throw InvalidIdTokenException::because('it was issued by a different tenant than the configured one.');
        }

        $nonce = Payload::string($claims['nonce'] ?? null);
        if ($nonce === null || ! hash_equals($expectedNonce, $nonce)) {
            throw InvalidIdTokenException::because('its nonce does not match.');
        }

        $subject = Payload::string($claims['sub'] ?? null)
            ?? throw InvalidIdTokenException::because('it has no subject.');

        try {
            $identity = new EntraIdentity($tid, Payload::string($claims['oid'] ?? null) ?? '');
        } catch (InvalidArgumentException) {
            throw InvalidIdTokenException::because('it has no valid object id.');
        }

        return new IdTokenClaims($identity, $subject, $nonce);
    }
}
