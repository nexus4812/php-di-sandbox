<?php

declare(strict_types=1);

namespace My\PhpDiSandbox\SymfonyDI\AutoWire;

class TwitterClient
{
    private Rot13Transformer $transformer;

    public function __construct(Rot13Transformer $transformer)
    {
        $this->transformer = $transformer;
    }

    public function tweet(User $user, string $key, string $status): void
    {
        $transformedStatus = $this->transformer->transform($status);

        // ... connect to Twitter and send the encoded status
    }
}
