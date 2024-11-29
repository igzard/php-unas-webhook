<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Entity;

class Payment
{
    private string $name;

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
