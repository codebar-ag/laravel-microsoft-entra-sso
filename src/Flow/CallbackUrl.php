<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Flow;

use CodebarAg\MicrosoftEntraSSO\Config\EntraConfig;
use CodebarAg\MicrosoftEntraSSO\Exceptions\InvalidRedirectUriException;
use Illuminate\Contracts\Routing\UrlGenerator;

/**
 * The redirect URI of a guard, derived from the callback route for every request.
 */
final readonly class CallbackUrl
{
    public function __construct(
        private UrlGenerator $urls,
        private EntraConfig $config,
    ) {}

    /**
     * @throws InvalidRedirectUriException
     */
    public function for(string $guard): string
    {
        $uri = $this->urls->route('microsoft-entra-sso.callback', ['guard' => $guard]);

        if ($this->config->allowedRedirectHosts !== []
            && ! in_array(parse_url($uri, PHP_URL_HOST), $this->config->allowedRedirectHosts, true)) {
            throw InvalidRedirectUriException::hostNotAllowed($uri);
        }

        return $uri;
    }
}
