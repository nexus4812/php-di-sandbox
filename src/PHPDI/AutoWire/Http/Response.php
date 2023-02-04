<?php

declare(strict_types=1);

namespace My\PhpDiSandbox\PHPDI\AutoWire\Http;

class Response
{
    public function __construct(
        private ?string $content = '',
        private int $status = 200,
        private string $headers = ''
    ) {
    }

    public function send(): void
    {
        http_response_code($this->status);
        header($this->headers);
        echo $this->content;
    }
}
