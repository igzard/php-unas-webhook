<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Common;

abstract class StringIdCollection extends GenericCollection
{
    public function __construct(protected string $value)
    {
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
