<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Entity\Product;

use Igzard\PhpUnasWebhook\ValueObject\Product\ProductIdCollection;
use Igzard\PhpUnasWebhook\ValueObject\ProductCategory\ProductCategory;

class Product
{
    private ProductIdCollection $productId;

    private string $sku;

    private string $skuType;

    private string $name;

    private ProductCategory $category;

    private float $quantity;

    private string $unit;

    private float $netPrice;

    private float $grossPrice;

    private float $vatRate;

    private bool $discounted;

    private array $productParameters;

    public function getProductId(): ProductIdCollection
    {
        return $this->productId;
    }

    public function setProductId(ProductIdCollection $productId): void
    {
        $this->productId = $productId;
    }

    public function getSku(): string
    {
        return $this->sku;
    }

    public function setSku(string $sku): void
    {
        $this->sku = $sku;
    }

    public function getSkuType(): string
    {
        return $this->skuType;
    }

    public function setSkuType(string $skuType): void
    {
        $this->skuType = $skuType;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCategory(): ProductCategory
    {
        return $this->category;
    }

    public function setCategory(ProductCategory $category): void
    {
        $this->category = $category;
    }

    public function getQuantity(): float
    {
        return $this->quantity;
    }

    public function setQuantity(float $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getUnit(): string
    {
        return $this->unit;
    }

    public function setUnit(string $unit): void
    {
        $this->unit = $unit;
    }

    public function getNetPrice(): float
    {
        return $this->netPrice;
    }

    public function setNetPrice(float $netPrice): void
    {
        $this->netPrice = $netPrice;
    }

    public function getGrossPrice(): float
    {
        return $this->grossPrice;
    }

    public function setGrossPrice(float $grossPrice): void
    {
        $this->grossPrice = $grossPrice;
    }

    public function getVatRate(): float
    {
        return $this->vatRate;
    }

    public function setVatRate(float $vatRate): void
    {
        $this->vatRate = $vatRate;
    }

    public function isDiscounted(): bool
    {
        return $this->discounted;
    }

    public function setDiscounted(bool $discounted): void
    {
        $this->discounted = $discounted;
    }

    public function getProductParameters(): array
    {
        return $this->productParameters;
    }

    public function setProductParameters(array $productParameters): void
    {
        $this->productParameters = $productParameters;
    }
}
