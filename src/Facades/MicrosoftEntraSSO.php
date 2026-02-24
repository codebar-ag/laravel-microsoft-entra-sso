<?php

namespace CodebarAg\MicrosoftEntraSSO\Facades;

use CodebarAg\MicrosoftEntraSSO\Services\MicrosoftOAuthService;
use Illuminate\Support\Facades\Facade;

/**
 * @method static string getAuthorizationUrl(string $state, string $codeVerifier)
 * @method static array exchangeCodeForTokens(string $code, string $codeVerifier)
 * @method static array getUserFromToken(string $accessToken)
 * @method static array refreshAccessToken(string $refreshToken)
 *
 * @see \CodebarAg\MicrosoftEntraSSO\Services\MicrosoftOAuthService
 */
class MicrosoftEntraSSO extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return MicrosoftOAuthService::class;
    }
}
