<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\ValueObject;

class Email
{
    private readonly string $email;

    public function __construct(string $email)
    {
        if (!filter_var($email, \FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException('Invalid email address');
        }

        $this->email = $email;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
