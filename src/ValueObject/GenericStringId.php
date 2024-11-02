<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\ValueObject;

abstract class GenericStringId
{
    protected string $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
