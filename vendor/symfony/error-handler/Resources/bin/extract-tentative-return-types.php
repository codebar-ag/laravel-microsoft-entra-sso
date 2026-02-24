#!/usr/bin/env php
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if ('cli' !== \PHP_SAPI) {
    throw new Exception('This script must be run from the command line.');
}

// Run from the root of the php-src repository, this script generates
// a table with all the methods that have a tentative return type.
//
// Usage: find -name *.stub.php | sort | /path/to/extract-tentative-return-types.php > /path/to/TentativeTypes.php

echo <<<EOPHP
