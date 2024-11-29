<?php

declare(strict_types=1);

use Igzard\PhpUnasWebhook\Config;

class ConfigTest extends PHPUnit\Framework\TestCase
{
    /**
     * Test config value object
     */
    public function testConfig(): void
    {
        $config = Config::init([
            'hmac' => 'test',
            'hmac_header' => 'test',
        ]);

        $this->assertEquals('test', $config->getHmac());
        $this->assertEquals('test', $config->getHmacHeader());
    }
}
