<?php

declare(strict_types=1);

namespace My\PhpDiSandbox\SymfonyDI\Simple;

class NewsletterManager
{
    /**
     * NewsletterManager constructor.
     */
    public function __construct(private Mailer $mailer)
    {
    }

    /**
     * @return Mailer
     */
    public function getMailer(): Mailer
    {
        return $this->mailer;
    }
}
