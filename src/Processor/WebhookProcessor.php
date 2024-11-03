<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Processor;

use Igzard\PhpUnasWebhook\Entity\Collection\ProductCollection;
use Igzard\PhpUnasWebhook\Entity\Customer\Contact;
use Igzard\PhpUnasWebhook\Entity\Customer\Customer;
use Igzard\PhpUnasWebhook\Entity\Customer\Invoice;
use Igzard\PhpUnasWebhook\Entity\Customer\Shipping;
use Igzard\PhpUnasWebhook\Entity\DiscountPercent;
use Igzard\PhpUnasWebhook\Entity\Payment;
use Igzard\PhpUnasWebhook\Entity\Product\Product;
use Igzard\PhpUnasWebhook\Entity\Shipping as OrderShipping;
use Igzard\PhpUnasWebhook\Entity\UnasOrder;
use Igzard\PhpUnasWebhook\Enum\Country;
use Igzard\PhpUnasWebhook\Enum\Currency;
use Igzard\PhpUnasWebhook\Exception\InvalidJsonException;
use Igzard\PhpUnasWebhook\ValueObject\OrderStatus\OrderStatus;
use Igzard\PhpUnasWebhook\ValueObject\OrderStatus\OrderStatusId;
use Igzard\PhpUnasWebhook\ValueObject\ProductCategory\ProductCategory;

class WebhookProcessor
{
    /**
     * @throws \Exception
     */
    public function handle(string $json): UnasOrder
    {
        $payload = json_decode($json, true);

        if (\JSON_ERROR_NONE !== json_last_error()) {
            throw InvalidJsonException::create();
        }

        return $this->createUnasOrder($payload);
    }

    private function createUnasOrder(array $payload): UnasOrder
    {
        return (new UnasOrder())
            ->setShopId($payload['shopID'])
            ->setOrderId($payload['orderID'])
            ->setGrandTotal($payload['grandTotal'])
            ->setTime($payload['time'])
            ->setDateTime(new \DateTime('@'.$payload['time']))
            ->setComment($payload['comment'])
            ->setCurrency(Currency::fromString($payload['currencyCode']))
            ->setOrderStatus(new OrderStatus(
                new OrderStatusId($payload['orderStatus']['id']),
                $payload['orderStatus']['name']
            ))
            ->setProducts($this->getProducts($payload))
            ->setCustomer($this->getCustomer($payload))
            ->setShipping($this->getShipping($payload))
            ->setOrderParameters($payload['orderParameters'])
            ->setPayment((new Payment())
                ->setName($payload['payment']['name'])
                ->setCost($payload['payment']['cost']))
            ->setDiscountPercent((new DiscountPercent())
                ->setPrice($payload['discountPercent']['price'])
                ->setTitle($payload['discountPercent']['title'])
                ->setPercent($payload['discountPercent']['percent']));
    }

    private function getProducts(array $payload): ProductCollection
    {
        $products = [];

        foreach ($payload['products'] as $product) {
            $products[] = (new Product())
                ->setProductId($product['ID'])
                ->setSku($product['sku'])
                ->setSkuType($product['skuType'])
                ->setName($product['name'])
                ->setCategory(new ProductCategory($product['category']['id'], $product['category']['name']))
                ->setQuantity($product['quantity'])
                ->setUnit($product['unit'])
                ->setNetPrice($product['netPrice'])
                ->setGrossPrice($product['grossPrice'])
                ->setVatRate($product['vatRate'])
                ->setDiscounted($product['discounted'])
                ->setProductParameters($product['productParameters']);
        }

        return new ProductCollection(...$products);
    }

    private function getCustomer(array $payload): Customer
    {
        return (new Customer())
            ->setContact((new Contact())
                    ->setName($payload['customer']['contact']['name'])
                    ->setPhone($payload['customer']['contact']['phone'])
                    ->setMobile($payload['customer']['contact']['mobile']))
            ->setShipping((new Shipping())
                ->setName($payload['customer']['shipping']['name'])
                ->setZip($payload['customer']['shipping']['zip'])
                ->setCity($payload['customer']['shipping']['city'])
                ->setStreet($payload['customer']['shipping']['street'])
                ->setCountry(Country::fromString($payload['customer']['shipping']['country']))
                ->setCounty(Country::fromString($payload['customer']['shipping']['county'])))
            ->setInvoice((new Invoice())
                ->setName($payload['customer']['invoice']['name'])
                ->setZip($payload['customer']['invoice']['zip'])
                ->setCity($payload['customer']['invoice']['city'])
                ->setStreet($payload['customer']['invoice']['street'])
                ->setCountry(Country::fromString($payload['customer']['invoice']['country']))
                ->setCounty(Country::fromString($payload['customer']['invoice']['county'])))
            ->setNewsAuth($payload['customer']['newsAuth'])
            ->setGroup($payload['customer']['group'])
            ->setLang($payload['customer']['lang'])
            ->setSubscribedToNewsletter($payload['customer']['subscribedToNewsletter'])
            ->setEmail($payload['customer']['email']);
    }

    private function getShipping(array $payload): OrderShipping
    {
        return (new OrderShipping())
            ->setName($payload['shipping']['name'])
            ->setType($payload['shipping']['type'])
            ->setCost($payload['shipping']['cost']);
    }
}
