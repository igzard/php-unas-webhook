<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Exception;

class InvalidJsonException extends \Exception
{
    /**
     * Create a new instance of the exception.
     *
     * @return self The new instance
     */
    public static function create(): self
    {
        return new self('Invalid JSON');
    }
}
