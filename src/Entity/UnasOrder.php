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

    public function setShopId(ShopId $shopId): void
    {
        $this->shopId = $shopId;
    }

    public function getOrderId(): OrderId
    {
        return $this->orderId;
    }

    public function setOrderId(OrderId $orderId): void
    {
        $this->orderId = $orderId;
    }

    public function getGrandTotal(): float
    {
        return $this->grandTotal;
    }

    public function setGrandTotal(float $grandTotal): void
    {
        $this->grandTotal = $grandTotal;
    }

    public function getTime(): int
    {
        return $this->time;
    }

    public function setTime(int $time): void
    {
        $this->time = $time;
    }

    public function getDateTime(): \DateTime
    {
        return $this->dateTime;
    }

    public function setDateTime(\DateTime $dateTime): void
    {
        $this->dateTime = $dateTime;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }

    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    public function setCurrency(Currency $currency): void
    {
        $this->currency = $currency;
    }

    public function getOrderStatus(): OrderStatus
    {
        return $this->orderStatus;
    }

    public function setOrderStatus(OrderStatus $orderStatus): void
    {
        $this->orderStatus = $orderStatus;
    }

    public function getProducts(): ProductCollection
    {
        return $this->products;
    }

    public function setProducts(ProductCollection $products): void
    {
        $this->products = $products;
    }

    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    public function setCustomer(Customer $customer): void
    {
        $this->customer = $customer;
    }

    public function getShipping(): Shipping
    {
        return $this->shipping;
    }

    public function setShipping(Shipping $shipping): void
    {
        $this->shipping = $shipping;
    }

    public function getOrderParameters(): array
    {
        return $this->orderParameters;
    }

    public function setOrderParameters(array $orderParameters): void
    {
        $this->orderParameters = $orderParameters;
    }

    public function getPayment(): Payment
    {
        return $this->payment;
    }

    public function setPayment(Payment $payment): void
    {
        $this->payment = $payment;
    }

    public function getDiscountPercent(): DiscountPercent
    {
        return $this->discountPercent;
    }

    public function setDiscountPercent(DiscountPercent $discountPercent): void
    {
        $this->discountPercent = $discountPercent;
    }
}
