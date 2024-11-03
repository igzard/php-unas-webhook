<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Entity;

use Igzard\PhpUnasWebhook\Enum\Currency;
use Igzard\PhpUnasWebhook\ValueObject\OrderIdCollection;
use Igzard\PhpUnasWebhook\ValueObject\OrderStatus\OrderStatus;
use Igzard\PhpUnasWebhook\ValueObject\ShopIdCollection;

class UnasOrder
{
    private ShopIdCollection $shopId;

    private OrderIdCollection $orderId;

    private float $grandTotal;

    private int $time;

    private \DateTime $dateTime;

    private string $comment;

    private Currency $currency;

    private OrderStatus $orderStatus;
}
