<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Common;

abstract class IdCollection extends GenericCollection
{
    protected int $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
