<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Entity;

class DiscountPercent
{
    private float $price;

    private string $title;

    private float $percent;

    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @internal
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @internal
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getPercent(): float
    {
        return $this->percent;
    }

    /**
     * @internal
     */
    public function setPercent(float $percent): void
    {
        $this->percent = $percent;
    }
}
