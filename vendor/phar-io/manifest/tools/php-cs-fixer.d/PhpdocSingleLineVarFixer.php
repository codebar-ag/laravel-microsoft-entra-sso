<?php
namespace PharIo\CSFixer;

use PhpCsFixer\Fixer\FixerInterface;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\Tokenizer\Tokens;
use PhpCsFixer\Tokenizer\Token;

/**
 * Main implementation taken from kubawerlos/php-cs-fixer-customere-fixers
 * Copyright (c) 2018 Kuba Werłos
 *
 * Slightly modified to work without the gazillion of composer dependencies
 *
 * Original:
 * https://github.com/kubawerlos/php-cs-fixer-custom-fixers/blob/master/src/Fixer/PhpdocSingleLineVarFixer.php
 *
 */
class PhpdocSingleLineVarFixer implements FixerInterface {

    public function getDefinition(): FixerDefinition {
        return new FixerDefinition(
            '`@var` annotation must be in single line when is the only content.',
            [new CodeSample('
