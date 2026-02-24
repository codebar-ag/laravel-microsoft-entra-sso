<?php

namespace Illuminate\View\Compilers\Concerns;

use Illuminate\Contracts\View\ViewCompilationException;

trait CompilesLoops
{
    /**
     * Counter to keep track of nested forelse statements.
     *
     * @var int
     */
    protected $forElseCounter = 0;

    /**
     * Compile the for-else statements into valid PHP.
     *
     * @param  string|null  $expression
     * @return string
     *
     * @throws \Illuminate\Contracts\View\ViewCompilationException
     */
    protected function compileForelse($expression)
    {
        $empty = '$__empty_'.++$this->forElseCounter;

        preg_match('/\( *(.+) +as +(.+)\)$/is', $expression ?? '', $matches);

        if (count($matches) === 0) {
            throw new ViewCompilationException('Malformed @forelse statement.');
        }

        $iteratee = trim($matches[1]);

        $iteration = trim($matches[2]);

        $initLoop = "\$__currentLoopData = {$iteratee}; \$__env->addLoop(\$__currentLoopData);";

        $iterateLoop = '$__env->incrementLoopIndices(); $loop = $__env->getLastLoop();';

        return "
