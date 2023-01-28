<?php

declare(strict_types=1);

namespace My\PhpDiSandbox\SymfonyDI;

class NewsletterManager
{
    /**
     * NewsletterManager constructor.
     * @param Mailer $mailer
     */
    public function __construct(private Mailer $mailer)
    {
    }

    // ...
}
