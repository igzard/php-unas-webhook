<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Entity;

use Igzard\PhpUnasWebhook\Entity\Collection\ProductCollection;
use Igzard\PhpUnasWebhook\Entity\Customer\Customer;
use Igzard\PhpUnasWebhook\Enum\Currency;
use Igzard\PhpUnasWebhook\ValueObject\OrderId;
use Igzard\PhpUnasWebhook\ValueObject\OrderStatus\OrderStatus;
use Igzard\PhpUnasWebhook\ValueObject\ShopId;

class UnasOrder
{
    private ShopId $shopId;

    private OrderId $orderId;

    private float $grandTotal;

    private int $time;

    private \DateTime $dateTime;

    private string $comment;

    private Currency $currency;

    private OrderStatus $orderStatus;

    private ProductCollection $products;

    private Customer $customer;

    private Shipping $shipping;

    private array $orderParameters;

    private Payment $payment;

    private DiscountPercent $discountPercent;

    public function getShopId(): ShopId
    {
        return $this->shopId;
    }

    /**
     * @internal
     */
    public function setShopId(ShopId $shopId): void
    {
        $this->shopId = $shopId;
    }

    public function getOrderId(): OrderId
    {
        return $this->orderId;
    }

    /**
     * @internal
     */
    public function setOrderId(OrderId $orderId): void
    {
        $this->orderId = $orderId;
    }

    public function getGrandTotal(): float
    {
        return $this->grandTotal;
    }

    /**
     * @internal
     */
    public function setGrandTotal(float $grandTotal): void
    {
        $this->grandTotal = $grandTotal;
    }

    public function getTime(): int
    {
        return $this->time;
    }

    /**
     * @internal
     */
    public function setTime(int $time): void
    {
        $this->time = $time;
    }

    public function getDateTime(): \DateTime
    {
        return $this->dateTime;
    }

    /**
     * @internal
     */
    public function setDateTime(\DateTime $dateTime): void
    {
        $this->dateTime = $dateTime;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @internal
     */
    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }

    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    /**
     * @internal
     */
    public function setCurrency(Currency $currency): void
    {
        $this->currency = $currency;
    }

    public function getOrderStatus(): OrderStatus
    {
        return $this->orderStatus;
    }

    /**
     * @internal
     */
    public function setOrderStatus(OrderStatus $orderStatus): void
    {
        $this->orderStatus = $orderStatus;
    }

    public function getProducts(): ProductCollection
    {
        return $this->products;
    }

    /**
     * @internal
     */
    public function setProducts(ProductCollection $products): void
    {
        $this->products = $products;
    }

    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    /**
     * @internal
     */
    public function setCustomer(Customer $customer): void
    {
        $this->customer = $customer;
    }

    public function getShipping(): Shipping
    {
        return $this->shipping;
    }

    /**
     * @internal
     */
    public function setShipping(Shipping $shipping): void
    {
        $this->shipping = $shipping;
    }

    public function getOrderParameters(): array
    {
        return $this->orderParameters;
    }

    /**
     * @internal
     */
    public function setOrderParameters(array $orderParameters): void
    {
        $this->orderParameters = $orderParameters;
    }

    public function getPayment(): Payment
    {
        return $this->payment;
    }

    /**
     * @internal
     */
    public function setPayment(Payment $payment): void
    {
        $this->payment = $payment;
    }

    public function getDiscountPercent(): DiscountPercent
    {
        return $this->discountPercent;
    }

    /**
     * @internal
     */
    public function setDiscountPercent(DiscountPercent $discountPercent): void
    {
        $this->discountPercent = $discountPercent;
    }
}
