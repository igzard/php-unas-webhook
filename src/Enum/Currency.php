<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Enum;

enum Currency: string
{
    case HUF = 'HUF';
    case EUR = 'EUR';
    case USD = 'USD';
    case GBP = 'GBP';

    public static function fromString(string $currency): self
    {
        return match ($currency) {
            'HUF' => self::HUF,
            'EUR' => self::EUR,
            'USD' => self::USD,
            'GBP' => self::GBP,
            default => throw new \InvalidArgumentException('Invalid currency: '.$currency),
        };
    }

    public function toString(): string
    {
        return $this->value;
    }
}
