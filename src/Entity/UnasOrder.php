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

    public function setShopId(ShopId $shopId): self
    {
        $this->shopId = $shopId;

        return $this;
    }

    public function getOrderId(): OrderId
    {
        return $this->orderId;
    }

    public function setOrderId(OrderId $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }

    public function getGrandTotal(): float
    {
        return $this->grandTotal;
    }

    public function setGrandTotal(float $grandTotal): self
    {
        $this->grandTotal = $grandTotal;

        return $this;
    }

    public function getTime(): int
    {
        return $this->time;
    }

    public function setTime(int $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getDateTime(): \DateTime
    {
        return $this->dateTime;
    }

    public function setDateTime(\DateTime $dateTime): self
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    public function setCurrency(Currency $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getOrderStatus(): OrderStatus
    {
        return $this->orderStatus;
    }

    public function setOrderStatus(OrderStatus $orderStatus): self
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    public function getProducts(): ProductCollection
    {
        return $this->products;
    }

    public function setProducts(ProductCollection $products): self
    {
        $this->products = $products;

        return $this;
    }

    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    public function setCustomer(Customer $customer): self
    {
        $this->customer = $customer;

        return $this;
    }

    public function getShipping(): Shipping
    {
        return $this->shipping;
    }

    public function setShipping(Shipping $shipping): self
    {
        $this->shipping = $shipping;

        return $this;
    }

    public function getOrderParameters(): array
    {
        return $this->orderParameters;
    }

    public function setOrderParameters(array $orderParameters): self
    {
        $this->orderParameters = $orderParameters;

        return $this;
    }

    public function getPayment(): Payment
    {
        return $this->payment;
    }

    public function setPayment(Payment $payment): self
    {
        $this->payment = $payment;

        return $this;
    }

    public function getDiscountPercent(): DiscountPercent
    {
        return $this->discountPercent;
    }

    public function setDiscountPercent(DiscountPercent $discountPercent): self
    {
        $this->discountPercent = $discountPercent;

        return $this;
    }
}
