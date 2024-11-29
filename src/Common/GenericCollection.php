<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Common;

abstract class GenericCollection implements \IteratorAggregate, \JsonSerializable, \Countable
{
    protected array $values;

    /**
     * Get the values.
     */
    public function getIterator(): \ArrayIterator
    {
        return new \ArrayIterator($this->values);
    }

    /**
     * Json serialize.
     */
    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }

    /**
     * Count the values.
     */
    public function count(): int
    {
        return \count($this->values);
    }

    /**
     * Check if the collection is empty.
     */
    public function isEmpty(): bool
    {
        return [] === $this->values;
    }

    /**
     * Clone the collection.
     */
    public function clone(): self
    {
        return clone $this;
    }
}
