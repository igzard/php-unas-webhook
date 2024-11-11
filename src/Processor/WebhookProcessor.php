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
use Igzard\PhpUnasWebhook\Enum\Language;
use Igzard\PhpUnasWebhook\Exception\InvalidJsonException;
use Igzard\PhpUnasWebhook\Validator\JsonValidator;
use Igzard\PhpUnasWebhook\ValueObject\Email;
use Igzard\PhpUnasWebhook\ValueObject\OrderId;
use Igzard\PhpUnasWebhook\ValueObject\OrderStatus\OrderStatus;
use Igzard\PhpUnasWebhook\ValueObject\OrderStatus\OrderStatusId;
use Igzard\PhpUnasWebhook\ValueObject\Product\ProductId;
use Igzard\PhpUnasWebhook\ValueObject\ProductCategory\ProductCategory;
use Igzard\PhpUnasWebhook\ValueObject\ProductCategory\ProductCategoryId;
use Igzard\PhpUnasWebhook\ValueObject\ShopId;

class WebhookProcessor
{
    /**
     * @throws \Exception
     */
    public function handle(string $json): UnasOrder
    {
        $payload = json_decode($json, true);

        if (false === (new JsonValidator())->validate($json)) {
            throw new InvalidJsonException('Invalid JSON');
        }

        return $this->createUnasOrder($payload);
    }

    private function createUnasOrder(array $payload): UnasOrder
    {
        $payment = new Payment();
        $payment->setName($payload['payment']['name']);
        $payment->setCost($payload['payment']['cost']);

        $discountPercent = new DiscountPercent();
        $discountPercent->setPrice($payload['discountPercent']['price']);
        $discountPercent->setTitle($payload['discountPercent']['title']);
        $discountPercent->setPercent((float) $payload['discountPercent']['percent']);

        $orderStatus = new OrderStatus(
            new OrderStatusId($payload['orderStatus']['id']),
            $payload['orderStatus']['name']
        );

        $unasOrder = new UnasOrder();
        $unasOrder->setShopId(new ShopId($payload['shopID']));
        $unasOrder->setOrderId(new OrderId($payload['orderID']));
        $unasOrder->setGrandTotal($payload['grandTotal']);
        $unasOrder->setTime($payload['time']);
        $unasOrder->setDateTime(new \DateTime('@'.$payload['time']));
        $unasOrder->setComment($payload['comment']);
        $unasOrder->setCurrency(Currency::fromString($payload['currencyCode']));
        $unasOrder->setOrderStatus($orderStatus);
        $unasOrder->setProducts($this->getProducts($payload));
        $unasOrder->setCustomer($this->getCustomer($payload));
        $unasOrder->setShipping($this->getShipping($payload));
        $unasOrder->setOrderParameters($payload['orderParameters']);
        $unasOrder->setPayment($payment);
        $unasOrder->setDiscountPercent($discountPercent);

        return $unasOrder;
    }

    private function getProducts(array $payload): ProductCollection
    {
        $products = new ProductCollection();

        foreach ($payload['products'] as $unasProduct) {
            $product = new Product();
            $product->setProductId(new ProductId($unasProduct['ID']));
            $product->setSku($unasProduct['sku']);
            $product->setSkuType($unasProduct['skuType']);
            $product->setName($unasProduct['name']);
            $product->setCategory(new ProductCategory(new ProductCategoryId($unasProduct['category']['ID']), $unasProduct['category']['name']));
            $product->setQuantity($unasProduct['quantity']);
            $product->setUnit($unasProduct['unit']);
            $product->setNetPrice($unasProduct['netPrice']);
            $product->setGrossPrice($unasProduct['grossPrice']);
            $product->setVatRate($unasProduct['VATRate']);
            $product->setDiscounted($unasProduct['discounted']);
            $product->setProductParameters((array) $unasProduct['productParameters']);

            $products->add($product);
        }

        return $products;
    }

    private function getCustomer(array $payload): Customer
    {
        $contact = new Contact();
        $contact->setName($payload['customer']['contact']['name']);
        $contact->setPhone($payload['customer']['contact']['phone']);
        $contact->setMobile($payload['customer']['contact']['mobile']);

        $shipping = new Shipping();
        $shipping->setName($payload['customer']['shipping']['name']);
        $shipping->setZip($payload['customer']['shipping']['zip']);
        $shipping->setCity($payload['customer']['shipping']['city']);
        $shipping->setStreet($payload['customer']['shipping']['street']);
        $shipping->setCountry(Country::fromString($payload['customer']['shipping']['country']));
        $shipping->setCounty(Country::fromString($payload['customer']['shipping']['county']));

        $invoice = new Invoice();
        $invoice->setName($payload['customer']['invoice']['name']);
        $invoice->setZip($payload['customer']['invoice']['zip']);
        $invoice->setCity($payload['customer']['invoice']['city']);
        $invoice->setStreet($payload['customer']['invoice']['street']);
        $invoice->setCountry(Country::fromString($payload['customer']['invoice']['country']));
        $invoice->setCounty(Country::fromString($payload['customer']['invoice']['county']));

        $customer = new Customer();
        $customer->setContact($contact);
        $customer->setShipping($shipping);
        $customer->setInvoice($invoice);
        $customer->setNewsAuth($payload['customer']['news_auth']);
        $customer->setGroup($payload['customer']['group']);
        $customer->setLang(Language::fromString($payload['customer']['lang']));
        $customer->setSubscribedToNewsletter($payload['customer']['subscribedToNewsletter']);
        $customer->setEmail(new Email($payload['customer']['email']));

        return $customer;
    }

    private function getShipping(array $payload): OrderShipping
    {
        $orderShipping = new OrderShipping();
        $orderShipping->setName($payload['shipping']['name']);
        $orderShipping->setType($payload['shipping']['type']);
        $orderShipping->setCost($payload['shipping']['cost']);

        return $orderShipping;
    }
}
