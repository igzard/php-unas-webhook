<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Exception;

class InvalidJsonException extends \Exception
{
    public static function create(): self
    {
        return new self('Invalid JSON');
    }
}