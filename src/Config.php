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

    /**
     * Initialize the Config object.
     *
     * @param array $config The configuration array
     *
     * @return self The Config object
     */
    public static function init(array $config): self
    {
        $self = new self();
        $self->hmac = $config['hmac'] ?? '';
        $self->hmacHeader = $config['hmac_header'] ?? '';

        return $self;
    }

    /**
     * Get the value of Hmac.
     *
     * @return string The value of Hmac
     */
    public function getHmac(): string
    {
        return $this->hmac;
    }

    /**
     * Get the value of HmacHeader.
     *
     * @return string The value of HmacHeader
     */
    public function getHmacHeader(): string
    {
        return $this->hmacHeader;
    }
}
