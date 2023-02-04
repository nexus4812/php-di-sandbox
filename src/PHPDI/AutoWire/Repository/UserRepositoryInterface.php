<?php

declare(strict_types=1);

namespace My\PhpDiSandbox\PHPDI\AutoWire\Repository;

use My\PhpDiSandbox\PHPDI\AutoWire\Domain\User;

interface UserRepositoryInterface
{
    public function firstOrFailed(int $user_id): User;
}
