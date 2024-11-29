<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Validator;

use Igzard\PhpUnasWebhook\ValueObject\Hmac;

readonly class HmacSecretValidator
{
    /**
     * @throws \Exception
     */
    public function __construct(private string $hmacHeader)
    {
    }

    /**
     * Validate HMAC header from request.
     *
     * @param Hmac   $hmac HMAC secret key
     * @param string $json unas webhook payload in JSON format
     *
     * @throws \Exception
     */
    public function validate(Hmac $hmac, string $json): void
    {
        if (!$this->verify($this->hmacHeader, $json, $hmac)) {
            throw new \Exception('HMAC is invalid');
        }
    }

    /**
     * Verify HMAC header.
     *
     * @param string $hmacHeader HMAC header from request
     * @param string $json       unas webhook payload in JSON format
     * @param Hmac   $hmac       HMAC secret key
     */
    private function verify(string $hmacHeader, string $json, Hmac $hmac): bool
    {
        return hash_equals($hmacHeader, base64_encode(hash_hmac('sha256', $json, $hmac->getValue(), true)));
    }
}
