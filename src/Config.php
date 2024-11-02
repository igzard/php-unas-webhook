<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook;

class Config
{
    private string $hmac;

    private function __construct()
    {
    }

    public static function init(array $config): self
    {
        $self = new self();
        $self->hmac = $config['hmac'] ?? '';

        return $self;
    }

    public function getHmac(): string
    {
        return $this->hmac;
    }
}
