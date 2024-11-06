<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Validator;

use Igzard\PhpUnasWebhook\ValueObject\Hmac;

class HmacSecretValidator
{
    /**
     * @throws \Exception
     */
    public function __construct(private readonly string $hmacHeader)
    {
    }

    /**
     * Validate HMAC header from request.
     *
     * @throws \Exception
     */
    public function validate(Hmac $hmac, string $json): void
    {
        if (!$this->verify($this->hmacHeader, $json, $hmac)) {
            throw new \Exception('HMAC is invalid');
        }
    }

    private function verify(string $hmacHeader, string $json, Hmac $hmac): bool
    {
        return hash_equals($hmacHeader, base64_encode(hash_hmac('sha256', $json, $hmac->getValue(), true)));
    }
}
