<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\ValueObject\ProductCategory;

class ProductCategory
{
    private ProductCategoryIdCollection $id;
    private string $name;

    public function __construct(ProductCategoryIdCollection $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId(): ProductCategoryIdCollection
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
