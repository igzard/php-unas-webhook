<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Entity;

use Igzard\PhpUnasWebhook\Entity\Collection\ProductCollection;
use Igzard\PhpUnasWebhook\Enum\Currency;
use Igzard\PhpUnasWebhook\ValueObject\OrderId;
use Igzard\PhpUnasWebhook\ValueObject\OrderStatus\OrderStatus;
use Igzard\PhpUnasWebhook\ValueObject\ShopId;

class UnasOrder
{
    private ShopId $shopId;

    private OrderId $orderId;

    private float $grandTotal;

    private int $time;

    private \DateTime $dateTime;

    private string $comment;

    private Currency $currency;

    private OrderStatus $orderStatus;

    private ProductCollection $products;

    private Customer $customer;
}
