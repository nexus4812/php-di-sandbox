<?php

declare(strict_types=1);

namespace My\PhpDiSandbox\PHPDI\AutoWire\Boostrap;

use function DI\autowire;

use My\PhpDiSandbox\PHPDI\AutoWire\Repository\UserRepository;
use My\PhpDiSandbox\PHPDI\AutoWire\Repository\UserRepositoryInterface;

return [
    UserRepositoryInterface::class => autowire(UserRepository::class),
];
