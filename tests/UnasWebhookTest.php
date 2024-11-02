<?php

declare(strict_types=1);

use Igzard\PhpUnasWebhook\UnasWebhook;
use PHPUnit\Framework\TestCase;

class UnasWebhookTest extends TestCase
{
    public function testHello(): void
    {
        $example = new UnasWebhook();
        $this->assertEquals('World', $example->hello());
    }
}