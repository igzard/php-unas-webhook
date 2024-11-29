<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Common;

abstract class IdCollection extends GenericCollection
{
    public function __construct(protected int $value)
    {
    }

    /**
     * Get the value of Id.
     */
    public function getValue(): int
    {
        return $this->value;
    }
}
