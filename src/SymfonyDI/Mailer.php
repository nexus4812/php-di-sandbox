<?php

declare(strict_types=1);

namespace My\PhpDiSandbox\SymfonyDI;

class Mailer
{
    public function __construct(private string $transport)
    {
    }

    /**
     * @return string
     */
    public function getTransport(): string
    {
        return $this->transport;
    }
    // ...
}
