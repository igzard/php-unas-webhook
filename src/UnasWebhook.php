<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook;

use Igzard\PhpUnasWebhook\Entity\UnasOrder;
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

    /**
     * @throws \Exception
     */
    public function __construct(array $configuration)
    {
        $config = Config::init($configuration);

        $this->hmac = new Hmac($config->getHmac());
        $this->hmacSecretValidator = new HmacSecretValidator($config->getHmacHeader());
        $this->webhookProcessor = new WebhookProcessor();
    }

    /**
     * Validate HMAC header and process webhook payload.
     *
     * @param string $json unas webhook payload in JSON format
     *
     * @return UnasOrder Webhook object response
     *
     * @throws \Exception
     */
    public function process(string $json): UnasOrder
    {
        // Validate HMAC header
        $this->hmacSecretValidator->validate($this->hmac, $json);

        // Process webhook payload
        return $this->webhookProcessor->handle($json);
    }
}
