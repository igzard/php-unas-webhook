<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Entity;

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

    public static function create(): self
    {
        return new self();
    }

    public function getProductId(): ProductIdCollection
    {
        return $this->productId;
    }

    public function setProductId(ProductIdCollection $productId): self
    {
        $this->productId = $productId;

        return $this;
    }

    public function getSku(): string
    {
        return $this->sku;
    }

    public function setSku(string $sku): self
    {
        $this->sku = $sku;

        return $this;
    }

    public function getSkuType(): string
    {
        return $this->skuType;
    }

    public function setSkuType(string $skuType): self
    {
        $this->skuType = $skuType;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCategory(): ProductCategory
    {
        return $this->category;
    }

    public function setCategory(ProductCategory $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getQuantity(): float
    {
        return $this->quantity;
    }

    public function setQuantity(float $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getUnit(): string
    {
        return $this->unit;
    }

    public function setUnit(string $unit): self
    {
        $this->unit = $unit;

        return $this;
    }

    public function getNetPrice(): float
    {
        return $this->netPrice;
    }

    public function setNetPrice(float $netPrice): self
    {
        $this->netPrice = $netPrice;

        return $this;
    }

    public function getGrossPrice(): float
    {
        return $this->grossPrice;
    }

    public function setGrossPrice(float $grossPrice): self
    {
        $this->grossPrice = $grossPrice;

        return $this;
    }

    public function getVatRate(): float
    {
        return $this->vatRate;
    }

    public function setVatRate(float $vatRate): self
    {
        $this->vatRate = $vatRate;

        return $this;
    }

    public function isDiscounted(): bool
    {
        return $this->discounted;
    }

    public function setDiscounted(bool $discounted): self
    {
        $this->discounted = $discounted;

        return $this;
    }

    public function getProductParameters(): array
    {
        return $this->productParameters;
    }

    public function setProductParameters(array $productParameters): self
    {
        $this->productParameters = $productParameters;

        return $this;
    }
}
