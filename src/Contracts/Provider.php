<?php

namespace CodebarAg\MicrosoftEntraSSO\Contracts;

use CodebarAg\MicrosoftEntraSSO\Data\SSOToken;
use CodebarAg\MicrosoftEntraSSO\Data\SSOUser;

interface Provider
{
    public function getAuthorizationUrl(string $state, string $codeVerifier): string;

    public function exchangeCodeForTokens(string $code, string $codeVerifier): SSOToken;

    public function getUserFromToken(string $accessToken): SSOUser;

    public function refreshAccessToken(string $refreshToken): SSOToken;

    public function stateless(bool $stateless = true): static;
}
