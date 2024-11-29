<?php

declare(strict_types=1);

namespace Processor;

use Igzard\PhpUnasWebhook\Exception\InvalidJsonException;
use Igzard\PhpUnasWebhook\Processor\WebhookProcessor;
use PHPUnit\Framework\TestCase;

class WebhookProcessorTest extends TestCase
{
    private WebhookProcessor $webhookProcessor;

    protected function setUp(): void
    {
        $this->webhookProcessor = new WebhookProcessor();
    }

    /**
     * Test invalid JSON
     *
     * @dataProvider invalidJsonDataProvider
     *
     * @throws \Exception
     */
    public function testInvalidJson(string $json): void
    {
        $this->expectException(InvalidJsonException::class);
        $this->webhookProcessor->handle($json);
    }

    public function invalidJsonDataProvider(): array
    {
        return [
            [''],
            ['{'],
            ['}'],
            ['{]'],
            ['[}'],
            ['{"test":}'],
            ['{"test":]}'],
            ['{"test":{]'],
        ];
    }

    /**
     * Test Unas order processing
     *
     * @dataProvider orderDataProvider
     *
     * @throws \Exception
     */
    public function testProcess(string $testOrderPath): void
    {
        $json = file_get_contents(__DIR__.'/test_orders/'.$testOrderPath);
        $order = json_decode($json, true);

        $unasOrder = $this->webhookProcessor->handle($json);

        $this->assertEquals($order['shopID'], $unasOrder->getShopId()->getValue());
        $this->assertEquals($order['orderID'], $unasOrder->getOrderId()->getValue());
        $this->assertEquals($order['grandTotal'], $unasOrder->getGrandTotal());
        $this->assertEquals($order['time'], $unasOrder->getTime());
        $this->assertEquals($order['comment'], $unasOrder->getComment());
        $this->assertEquals($order['currencyCode'], $unasOrder->getCurrency()->value);

        $this->assertEquals($order['orderStatus']['id'], $unasOrder->getOrderStatus()->getId()->getValue());
        $this->assertEquals($order['orderStatus']['name'], $unasOrder->getOrderStatus()->getName());

        $this->assertEquals($order['customer']['contact']['name'], $unasOrder->getCustomer()->getContact()->getName());
        $this->assertEquals($order['customer']['contact']['phone'], $unasOrder->getCustomer()->getContact()->getPhone());
        $this->assertEquals($order['customer']['contact']['mobile'], $unasOrder->getCustomer()->getContact()->getMobile());
        $this->assertEquals($order['customer']['shipping']['name'], $unasOrder->getCustomer()->getShipping()->getName());
        $this->assertEquals($order['customer']['shipping']['zip'], $unasOrder->getCustomer()->getShipping()->getZip());
        $this->assertEquals($order['customer']['shipping']['city'], $unasOrder->getCustomer()->getShipping()->getCity());
        $this->assertEquals($order['customer']['shipping']['street'], $unasOrder->getCustomer()->getShipping()->getStreet());
        $this->assertEquals($order['customer']['shipping']['country'], $unasOrder->getCustomer()->getShipping()->getCountry()->value);
        $this->assertEquals($order['customer']['shipping']['county'], $unasOrder->getCustomer()->getShipping()->getCounty()->value);
        $this->assertEquals($order['customer']['invoice']['name'], $unasOrder->getCustomer()->getInvoice()->getName());
        $this->assertEquals($order['customer']['invoice']['zip'], $unasOrder->getCustomer()->getInvoice()->getZip());
        $this->assertEquals($order['customer']['invoice']['city'], $unasOrder->getCustomer()->getInvoice()->getCity());
        $this->assertEquals($order['customer']['invoice']['street'], $unasOrder->getCustomer()->getInvoice()->getStreet());
        $this->assertEquals($order['customer']['invoice']['country'], $unasOrder->getCustomer()->getInvoice()->getCountry()->value);
        $this->assertEquals($order['customer']['invoice']['county'], $unasOrder->getCustomer()->getInvoice()->getCounty()->value);
        $this->assertEquals($order['customer']['news_auth'], $unasOrder->getCustomer()->getNewsAuth());
        $this->assertEquals($order['customer']['group'], $unasOrder->getCustomer()->getGroup());
        $this->assertEquals($order['customer']['lang'], $unasOrder->getCustomer()->getLang()->value);
        $this->assertEquals($order['customer']['subscribedToNewsletter'], $unasOrder->getCustomer()->isSubscribedToNewsletter());
        $this->assertEquals($order['customer']['email'], $unasOrder->getCustomer()->getEmail()->getEmail());

        $this->assertEquals($order['shipping']['name'], $unasOrder->getShipping()->getName());
        $this->assertEquals($order['shipping']['type'], $unasOrder->getShipping()->getType());
        $this->assertEquals($order['shipping']['cost'], $unasOrder->getShipping()->getCost());

        $this->assertEquals($order['orderParameters'], $unasOrder->getOrderParameters());

        $this->assertEquals($order['payment']['name'], $unasOrder->getPayment()->getName());
        $this->assertEquals($order['payment']['cost'], $unasOrder->getPayment()->getCost());

        $this->assertEquals($order['discountPercent']['price'], $unasOrder->getDiscountPercent()->getPrice());
        $this->assertEquals($order['discountPercent']['title'], $unasOrder->getDiscountPercent()->getTitle());
        $this->assertEquals($order['discountPercent']['percent'], $unasOrder->getDiscountPercent()->getPercent());

        $this->assertEquals(\count($order['products']), $unasOrder->getProducts()->count());

        foreach ($unasOrder->getProducts() as $i => $product) {
            $key = $i + 1;

            $this->assertEquals($order['products'][$key]['ID'], $product->getProductId()->getValue());
            $this->assertEquals($order['products'][$key]['sku'], $product->getSku());
            $this->assertEquals($order['products'][$key]['skuType'], $product->getSkuType());
            $this->assertEquals($order['products'][$key]['name'], $product->getName());
            $this->assertEquals($order['products'][$key]['category']['ID'], $product->getCategory()->getId()->getValue());
            $this->assertEquals($order['products'][$key]['category']['name'], $product->getCategory()->getName());
            $this->assertEquals($order['products'][$key]['quantity'], $product->getQuantity());
            $this->assertEquals($order['products'][$key]['unit'], $product->getUnit());
            $this->assertEquals($order['products'][$key]['netPrice'], $product->getNetPrice());
            $this->assertEquals($order['products'][$key]['grossPrice'], $product->getGrossPrice());
            $this->assertEquals($order['products'][$key]['VATRate'], $product->getVatRate());
            $this->assertEquals($order['products'][$key]['discounted'], $product->isDiscounted());
            $this->assertEquals((array) $order['products'][$key]['productParameters'], $product->getProductParameters());
        }
    }

    public function orderDataProvider(): array
    {
        return [
            ['01.json'],
        ];
    }
}
