<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\ValueObject;

final class Hmac
{
    private string $hmac;

    public function __construct(string $hmac)
    {
        $this->hmac = $hmac;
    }

    public function getHmac(): string
    {
        return $this->hmac;
    }
}