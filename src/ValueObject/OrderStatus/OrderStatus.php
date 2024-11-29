<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\ValueObject\OrderStatus;

class OrderStatus
{
    public function __construct(private readonly OrderStatusId $id, private readonly string $name)
    {
    }

    /**
     * Get the id of OrderStatus.
     *
     * @return OrderStatusId The id of OrderStatus
     */
    public function getId(): OrderStatusId
    {
        return $this->id;
    }

    /**
     * Get the name of OrderStatus.
     *
     * @return string The name of OrderStatus
     */
    public function getName(): string
    {
        return $this->name;
    }
}
