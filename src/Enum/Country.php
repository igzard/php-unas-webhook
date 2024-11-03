<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Enum;

enum Country: string
{
    case HU = 'hu';

    public static function fromString(string $country): self
    {
        return match ($country) {
            'hu' => self::HU,
            default => throw new \InvalidArgumentException('Invalid currency: '.$country),
        };
    }
}
