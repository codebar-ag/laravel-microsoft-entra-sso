<?php

namespace Illuminate\View\Compilers\Concerns;

trait CompilesContexts
{
    /**
     * Compile the context statements into valid PHP.
     *
     * @param  string  $expression
     * @return string
     */
    protected function compileContext($expression)
    {
        $expression = $this->stripParentheses($expression);

        return '
