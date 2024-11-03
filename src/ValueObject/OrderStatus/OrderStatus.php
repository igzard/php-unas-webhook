<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\ValueObject\OrderStatus;

class OrderStatus
{
    private OrderStatusId $id;
    private string $name;

    public function __construct(OrderStatusId $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId(): OrderStatusId
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
