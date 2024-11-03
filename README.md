# PHP Unas Webhook Processor

🛍️ Use this package to process incoming webhooks from Unas API.

<p align="left">
    <p align="left">
        <a href="https://github.com/igzard/php-unas-webhook/actions/workflows/tests.yml"><img src="https://img.shields.io/github/actions/workflow/status/igzard/php-unas-webhook/tests.yml?label=tests&style=flat-square" alt="Tests passed"></a>
        <a href="https://packagist.org/packages/igzard/php-unas-webhook"><img alt="Total Downloads" src="https://img.shields.io/packagist/dt/igzard/php-unas-webhook"></a>
        <a href="https://packagist.org/packages/igzard/php-unas-webhook"><img alt="Latest Version" src="https://img.shields.io/packagist/v/igzard/php-unas-webhookn"></a>
    </p>
</p>

------

> **Requires [PHP 8.3+](https://php.net/releases/)**

## Getting started

### Installation

```bash
composer require igzard/php-unas-webhook
```

### Usage

```php

//Initialize Unas Webhook with your Unas shop HMAC secret
use Igzard\PhpUnasWebhook\UnasWebhook;

$webhook = new UnasWebhook([
    'hmac' => 'your-unas-shop-hmac-secret',
    'hmac_header' => 'Hmac secret from http header e.g: $_SERVER["HTTP_X_UNAS_HMAC"]'
]);

//Process incoming webhook request
$unasOrder = $webhook->process('Webhook request json body');

//Get order data eg. order number
$orderNumber = $unasOrder->getOrderId()->getValue();

//or get customer data
$customer = $unasOrder->getCustomer();

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

🎨 Run **php-cs-fixer**:
```bash
make php-cs-fixer
```

🔥 Run **phpstan**:
```bash
make phpstan
```

**PHP UNAS Webhook processor** was created by **[Gergely Ignácz](https://x.com/igz4rd)** under the **[MIT license](https://opensource.org/licenses/MIT)**.