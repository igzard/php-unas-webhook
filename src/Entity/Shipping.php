<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Entity;

class Shipping
{
    private string $name;

    private string $type;

    private float $cost;

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @internal
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @internal
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getCost(): float
    {
        return $this->cost;
    }

    /**
     * @internal
     */
    public function setCost(float $cost): void
    {
        $this->cost = $cost;
    }
}
