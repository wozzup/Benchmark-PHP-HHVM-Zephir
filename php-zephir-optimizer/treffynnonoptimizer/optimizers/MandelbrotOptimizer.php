<?php

class MandelbrotOptimizer
{
    public function optimize(array $expression, Call $call, CompilationContext $context)
    {
        $context->headersManager->add('my_mandelbrot.h');
        $resolvedParams = $call->getReadOnlyResolvedParams($expression['parameters'], $context, $expression);
        return new CompiledExpression('int', 'my_mandelbrot(' . $resolvedParams[0] . ')', $expression);
    }
}
