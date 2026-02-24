<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2026 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\Command;

use PhpParser\Parser;
use Psy\Exception\ParseErrorException;
use Psy\ParserFactory;

/**
 * Class CodeArgumentParser.
 */
class CodeArgumentParser
{
    private Parser $parser;

    public function __construct(?Parser $parser = null)
    {
        $this->parser = $parser ?? (new ParserFactory())->createParser();
    }

    /**
     * Lex and parse a string of code into statements.
     *
     * This is intended for code arguments, so the code string *should not* start with
