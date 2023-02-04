<?php

declare(strict_types=1);

namespace My\PhpDiSandbox\PHPDI\AutoWire\Controller;

use My\PhpDiSandbox\PHPDI\AutoWire\Http\Response;
use My\PhpDiSandbox\PHPDI\AutoWire\Repository\UserRepositoryInterface;

class MyPageController
{
    public function __construct(private UserRepositoryInterface $repository)
    {
    }

    public function index(int $user_id): Response
    {
        $user = $this->repository->firstOrFailed($user_id);

        return new Response("Hi. My name is {$user->getUserName()}");
    }
}
