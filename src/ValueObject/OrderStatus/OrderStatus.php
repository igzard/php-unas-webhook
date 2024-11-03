<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\ValueObject\OrderStatus;

class OrderStatus
{
    private OrderStatusIdCollection $id;
    private string $name;

    public function __construct(OrderStatusIdCollection $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId(): OrderStatusIdCollection
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
