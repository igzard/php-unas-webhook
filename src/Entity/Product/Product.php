<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Entity\Product;

use Igzard\PhpUnasWebhook\ValueObject\Product\ProductId;
use Igzard\PhpUnasWebhook\ValueObject\ProductCategory\ProductCategory;

class Product
{
    private ProductId $productId;

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

    public function getProductId(): ProductId
    {
        return $this->productId;
    }

    /**
     * @internal
     */
    public function setProductId(ProductId $productId): void
    {
        $this->productId = $productId;
    }

    public function getSku(): string
    {
        return $this->sku;
    }

    /**
     * @internal
     */
    public function setSku(string $sku): void
    {
        $this->sku = $sku;
    }

    public function getSkuType(): string
    {
        return $this->skuType;
    }

    /**
     * @internal
     */
    public function setSkuType(string $skuType): void
    {
        $this->skuType = $skuType;
    }

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

    public function getCategory(): ProductCategory
    {
        return $this->category;
    }

    /**
     * @internal
     */
    public function setCategory(ProductCategory $category): void
    {
        $this->category = $category;
    }

    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * @internal
     */
    public function setQuantity(float $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getUnit(): string
    {
        return $this->unit;
    }

    /**
     * @internal
     */
    public function setUnit(string $unit): void
    {
        $this->unit = $unit;
    }

    public function getNetPrice(): float
    {
        return $this->netPrice;
    }

    /**
     * @internal
     */
    public function setNetPrice(float $netPrice): void
    {
        $this->netPrice = $netPrice;
    }

    public function getGrossPrice(): float
    {
        return $this->grossPrice;
    }

    /**
     * @internal
     */
    public function setGrossPrice(float $grossPrice): void
    {
        $this->grossPrice = $grossPrice;
    }

    public function getVatRate(): float
    {
        return $this->vatRate;
    }

    /**
     * @internal
     */
    public function setVatRate(float $vatRate): void
    {
        $this->vatRate = $vatRate;
    }

    public function isDiscounted(): bool
    {
        return $this->discounted;
    }

    /**
     * @internal
     */
    public function setDiscounted(bool $discounted): void
    {
        $this->discounted = $discounted;
    }

    public function getProductParameters(): array
    {
        return $this->productParameters;
    }

    /**
     * @internal
     */
    public function setProductParameters(array $productParameters): void
    {
        $this->productParameters = $productParameters;
    }
}
