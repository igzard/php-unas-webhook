<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\ValueObject\ProductCategory;

class ProductCategory
{
    public function __construct(private readonly ProductCategoryId $id, private readonly string $name)
    {
    }

    /**
     * Get the id of ProductCategory.
     *
     * @return ProductCategoryId The id of ProductCategory
     */
    public function getId(): ProductCategoryId
    {
        return $this->id;
    }

    /**
     * Get the name of ProductCategory.
     *
     * @return string The name of ProductCategory
     */
    public function getName(): string
    {
        return $this->name;
    }
}
