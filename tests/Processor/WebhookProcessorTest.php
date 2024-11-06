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
     * @dataProvider invalidJsonDataProvider
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
}
