<?php

declare(strict_types=1);

namespace My\PhpDiSandbox\SymfonyDI\AutoWire;

class Rot13Transformer
{
    public function transform(string $value): string
    {
        return str_rot13($value);
    }
}
