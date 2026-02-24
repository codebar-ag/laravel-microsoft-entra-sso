<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Process;

use Symfony\Component\Process\Exception\LogicException;
use Symfony\Component\Process\Exception\RuntimeException;

/**
 * PhpSubprocess runs a PHP command as a subprocess while keeping the original php.ini settings.
 *
 * For this, it generates a temporary php.ini file taking over all the current settings and disables
 * loading additional .ini files. Basically, your command gets prefixed using "php -n -c /tmp/temp.ini".
 *
 * Given your php.ini contains "memory_limit=-1" and you have a "MemoryTest.php" with the following content:
 *
 *
