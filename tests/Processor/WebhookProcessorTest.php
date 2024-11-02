<?php

declare(strict_types=1);

namespace Processor;

use Igzard\PhpUnasWebhook\Entity\WebhookResponse;
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
     * @dataProvider requestResponseDataProvider
     */
    public function testHandle(string $requestJson, WebhookResponse $expectedResult): void
    {
        $this->assertEquals(
            $this->webhookProcessor->handle($requestJson),
            $expectedResult,
        );
    }

    public function requestResponseDataProvider(): array
    {
        return [
            [
                'requestJson' => '{"test": "test"}',
                'expectedResult' => new WebhookResponse(),
            ],
            [
                'requestJson' => '{}',
                'expectedResult' => new WebhookResponse(),
            ],
        ];
    }

    /**
     * @throws \Exception
     */
    public function testInvalidJson(): void
    {
        $this->expectException(InvalidJsonException::class);

        $this->webhookProcessor->handle('test with string');
    }
}
