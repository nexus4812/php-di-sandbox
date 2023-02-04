<?php

declare(strict_types=1);

namespace My\PhpDiSandbox\PHPDI\AutoWire\Domain;

class User
{
    public function __construct(
        private int $user_id,
        private string $user_name,
    ) {
    }

    public function getUserId(): int
    {
        return $this->user_id;
    }

    public function getUserName(): string
    {
        return $this->user_name;
    }
}
