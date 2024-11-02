<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Processor;

use Igzard\PhpUnasWebhook\Entity\UnasOrder;
use Igzard\PhpUnasWebhook\Exception\InvalidJsonException;

class WebhookProcessor
{
    /**
     * @throws \Exception
     */
    public function handle(string $json): UnasOrder
    {
        $payload = json_decode($json, true);

        if (\JSON_ERROR_NONE !== json_last_error()) {
            throw InvalidJsonException::create();
        }

        return new UnasOrder();
    }
}
