<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\ValueObject\ProductCategory;

class ProductCategory
{
    private ProductCategoryId $id;
    private string $name;

    public function __construct(ProductCategoryId $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
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
