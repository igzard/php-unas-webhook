<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\ValueObject\OrderStatus;

class OrderStatus
{
    public function __construct(private readonly OrderStatusId $id, private readonly string $name)
    {
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
