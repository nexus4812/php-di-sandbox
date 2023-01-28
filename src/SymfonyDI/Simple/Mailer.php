<?php

declare(strict_types=1);

namespace My\PhpDiSandbox\SymfonyDI\Simple;

class Mailer
{
    public function __construct(private string $transport)
    {
    }

    public function getTransport(): string
    {
        return $this->transport;
    }
    // ...
}
