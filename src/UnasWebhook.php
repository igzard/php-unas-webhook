<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook;

use Igzard\PhpUnasWebhook\Entity\WebhookResponse;
use Igzard\PhpUnasWebhook\Processor\WebhookProcessor;
use Igzard\PhpUnasWebhook\Validator\HmacSecretValidator;
use Igzard\PhpUnasWebhook\ValueObject\Hmac;

final class UnasWebhook
{
    /**
     * Hmac secret key.
     */
    private Hmac $hmac;

    /**
     * Hmac secret validator.
     */
    private HmacSecretValidator $hmacSecretValidator;

    /**
     * Webhook processor for create Webhook Response.
     */
    private WebhookProcessor $webhookProcessor;

    public function __construct(string $hmac)
    {
        $this->hmac = new Hmac($hmac);
        $this->hmacSecretValidator = new HmacSecretValidator();
        $this->webhookProcessor = new WebhookProcessor();
    }

    /**
     * @throws \Exception
     */
    public function process(string $unasPayloadJson): WebhookResponse
    {
        $this->hmacSecretValidator->validate($this->hmac);

        return $this->webhookProcessor->handle($unasPayloadJson);
    }
}
