<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Flow;

use Carbon\CarbonImmutable;
use Illuminate\Support\Str;
use SensitiveParameter;

/**
 * What the session remembers between the redirect and the callback.
 */
final readonly class FlowState
{
    public function __construct(
        public string $state,
        #[SensitiveParameter] public string $codeVerifier,
        public string $nonce,
        public string $guard,
        public int $issuedAt,
    ) {}

    public static function begin(string $guard): self
    {
        return new self(
            state: Str::random(40),
            codeVerifier: Str::random(128),
            nonce: Str::random(40),
            guard: $guard,
            issuedAt: CarbonImmutable::now()->getTimestamp(),
        );
    }

    /**
     * PKCE S256 challenge for the code verifier.
     */
    public function codeChallenge(): string
    {
        return rtrim(strtr(base64_encode(hash('sha256', $this->codeVerifier, true)), '+/', '-_'), '=');
    }

    /**
     * @return array{state: string, code_verifier: string, nonce: string, guard: string, issued_at: int}
     */
    public function toArray(): array
    {
        return [
            'state' => $this->state,
            'code_verifier' => $this->codeVerifier,
            'nonce' => $this->nonce,
            'guard' => $this->guard,
            'issued_at' => $this->issuedAt,
        ];
    }

    public static function fromSession(mixed $value): ?self
    {
        if (! is_array($value)) {
            return null;
        }

        $state = $value['state'] ?? null;
        $verifier = $value['code_verifier'] ?? null;
        $nonce = $value['nonce'] ?? null;
        $guard = $value['guard'] ?? null;
        $issuedAt = $value['issued_at'] ?? null;

        if (! is_string($state) || ! is_string($verifier) || ! is_string($nonce) || ! is_string($guard) || ! is_int($issuedAt)
            || $state === '' || $verifier === '' || $nonce === '' || $guard === '') {
            return null;
        }

        return new self($state, $verifier, $nonce, $guard, $issuedAt);
    }
}
