<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook;

class Config
{
    private string $hmac;
    private string $hmacHeader;

    private function __construct()
    {
    }

    public static function init(array $config): self
    {
        $self = new self();
        $self->hmac = $config['hmac'] ?? '';
        $self->hmacHeader = $config['hmac_header'] ?? '';

        return $self;
    }

    public function getHmac(): string
    {
        return $this->hmac;
    }

    public function getHmacHeader(): string
    {
        return $this->hmacHeader;
    }
}
