<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Common;

abstract class GenericCollection implements \IteratorAggregate, \JsonSerializable, \Countable
{
    protected array $values;

    public function getIterator(): \ArrayIterator
    {
        return new \ArrayIterator($this->values);
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }

    public function count(): int
    {
        return \count($this->values);
    }

    public function isEmpty(): bool
    {
        return [] === $this->values;
    }

    public function clone(): self
    {
        return clone $this;
    }
}
