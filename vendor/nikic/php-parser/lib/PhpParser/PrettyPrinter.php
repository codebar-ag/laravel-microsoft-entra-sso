<?php declare(strict_types=1);

namespace PhpParser;

use PhpParser\Node\Expr;

interface PrettyPrinter {
    /**
     * Pretty prints an array of statements.
     *
     * @param Node[] $stmts Array of statements
     *
     * @return string Pretty printed statements
     */
    public function prettyPrint(array $stmts): string;

    /**
     * Pretty prints an expression.
     *
     * @param Expr $node Expression node
     *
     * @return string Pretty printed node
     */
    public function prettyPrintExpr(Expr $node): string;

    /**
     * Pretty prints a file of statements (includes the opening
