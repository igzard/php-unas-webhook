<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Validator;

use Igzard\PhpUnasWebhook\ValueObject\Hmac;

class HmacSecretValidator
{
    private const string HMAC_HEADER = 'HTTP_X_UNAS_HMAC';

    /**
     * Validate HMAC header from request.
     *
     * @throws \Exception
     */
    public function validate(Hmac $hmac, string $json): void
    {
        global $_SERVER;

        $hmacHeader = $_SERVER[self::HMAC_HEADER] ?? null;

        if (null === $hmacHeader) {
            throw new \Exception('HMAC header is missing');
        }

        if (!$this->verify($hmacHeader, $json, $hmac)) {
            throw new \Exception('HMAC is invalid');
        }
    }

    private function verify(string $hmacHeader, string $json, Hmac $hmac): bool
    {
        $hmac = base64_encode(hash_hmac('sha256', $json, $hmac->getValue(), true));

        return hash_equals($hmacHeader, $hmac);
    }
}