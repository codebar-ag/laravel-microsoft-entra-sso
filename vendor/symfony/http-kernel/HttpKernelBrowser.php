<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel;

use Symfony\Component\BrowserKit\AbstractBrowser;
use Symfony\Component\BrowserKit\CookieJar;
use Symfony\Component\BrowserKit\History;
use Symfony\Component\BrowserKit\Request as DomRequest;
use Symfony\Component\BrowserKit\Response as DomResponse;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Simulates a browser and makes requests to an HttpKernel instance.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @template-extends AbstractBrowser<Request, Response>
 */
class HttpKernelBrowser extends AbstractBrowser
{
    private bool $catchExceptions = true;

    /**
     * @param array $server The server parameters (equivalent of $_SERVER)
     */
    public function __construct(
        protected HttpKernelInterface $kernel,
        array $server = [],
        ?History $history = null,
        ?CookieJar $cookieJar = null,
    ) {
        // These class properties must be set before calling the parent constructor, as it may depend on it.
        $this->followRedirects = false;

        parent::__construct($server, $history, $cookieJar);
    }

    /**
     * Sets whether to catch exceptions when the kernel is handling a request.
     */
    public function catchExceptions(bool $catchExceptions): void
    {
        $this->catchExceptions = $catchExceptions;
    }

    /**
     * @param Request $request
     */
    protected function doRequest(object $request): Response
    {
        $response = $this->kernel->handle($request, HttpKernelInterface::MAIN_REQUEST, $this->catchExceptions);

        if ($this->kernel instanceof TerminableInterface) {
            $this->kernel->terminate($request, $response);
        }

        return $response;
    }

    /**
     * @param Request $request
     */
    protected function getScript(object $request): string
    {
        $kernel = var_export(serialize($this->kernel), true);
        $request = var_export(serialize($request), true);

        $errorReporting = error_reporting();

        $requires = '';
        foreach (get_declared_classes() as $class) {
            if (str_starts_with($class, 'ComposerAutoloaderInit')) {
                $r = new \ReflectionClass($class);
                $file = \dirname($r->getFileName(), 2).'/autoload.php';
                if (file_exists($file)) {
                    $requires .= 'require_once '.var_export($file, true).";\n";
                }
            }
        }

        if (!$requires) {
            throw new \RuntimeException('Composer autoloader not found.');
        }

        $code = <<<EOF
