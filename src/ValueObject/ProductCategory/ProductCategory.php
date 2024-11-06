<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\ValueObject\ProductCategory;

class ProductCategory
{
    public function __construct(private readonly ProductCategoryId $id, private readonly string $name)
    {
    }

    public function getId(): ProductCategoryId
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
