<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Common;

abstract class StringIdCollection extends GenericCollection
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
