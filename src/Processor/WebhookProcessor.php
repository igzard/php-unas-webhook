<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Processor;

use Igzard\PhpUnasWebhook\Entity\UnasOrder;
use Igzard\PhpUnasWebhook\Exception\InvalidJsonException;
use Igzard\PhpUnasWebhook\Factory\UnasOrderFactory;
use Igzard\PhpUnasWebhook\Validator\JsonValidator;

class WebhookProcessor
{
    /**
     * Decode JSON payload and create UnasOrder entity.
     *
     * @throws \Exception
     */
    public function handle(string $json): UnasOrder
    {
        $payload = json_decode($json, true);

        if (false === (new JsonValidator())->validate($json)) {
            throw new InvalidJsonException('Invalid JSON');
        }

        return (new UnasOrderFactory())->createFromPayload($payload);
    }
}
