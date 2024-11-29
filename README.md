# PHP Unas Webhook Processor

🛍️ Use this package to process incoming webhooks from Unas.

<p align="left">
    <p align="left">
        <a href="https://github.com/igzard/php-unas-webhook/actions/workflows/tests.yml"><img src="https://img.shields.io/github/actions/workflow/status/igzard/php-unas-webhook/tests.yml?label=tests&style=flat-square" alt="Tests passed"></a>
        <a href="https://packagist.org/packages/igzard/php-unas-webhook"><img alt="Total Downloads" src="https://img.shields.io/packagist/dt/igzard/php-unas-webhook"></a>
        <a href="https://packagist.org/packages/igzard/php-unas-webhook"><img alt="Latest Version" src="https://img.shields.io/packagist/v/igzard/php-unas-webhook"></a>
    </p>
</p>

------

> **Requires [PHP 8.3+](https://php.net/releases/)**

## Getting started

### Get Hmac Secret from UNAS

```
1. First step you need to login to your unas webshop admin (https://unas.hu/belepes)
2. Navigate to Settings -> External connections -> API connection (https://shop.unas.hu/admin_config_connect_api.php)
3. Click to "Verify webhook" tab
4. Click to "HMAC key generation"
5. Copy+Paste your Hmac secret code
```

### Installation

```bash
composer require igzard/php-unas-webhook
```

### Usage

```php

//Initialize Unas Webhook with your Unas shop HMAC secret and request header UNAS hmac
use Igzard\PhpUnasWebhook\UnasWebhook;

$webhook = new UnasWebhook([
    'hmac' => 'your-unas-shop-hmac-secret',
    'hmac_header' => 'Hmac secret from http header e.g: $_SERVER["HTTP_X_UNAS_HMAC"]'
]);

//Process incoming webhook request
$unasOrder = $webhook->process("{'message':'Unas request json'}");

//Get order data eg. order number
$orderNumber = $unasOrder->getOrderId()->getValue(); //return with unas webshop order number string

//or get customer data
$customer = $unasOrder->getCustomer(); //return with Customer data object

//etc.

//processing Unas Order with your domain logic...

```

## Contributing

We are open to contributions. If you want to fix a bug, implement a new feature or just ask a question, please feel free to open an issue or create a pull request.

🚀 Install dependencies with **composer**:
```bash
make composer-install
```

✅ Run **Code quality** check:
```bash
make code-quality
```

👷 Run **PHPUnit** tests:
```bash
make phpunit
```

🎨 Run **cs-fix**:
```bash
make cs-fix
```

🔥 Run **phpstan**:
```bash
make phpstan
```

♻️ Run **rector**:
```bash
make rector
```

**PHP UNAS Webhook processor** was created by **[Gergely Ignácz](https://x.com/igz4rd)** under the **[MIT license](https://opensource.org/licenses/MIT)**.
