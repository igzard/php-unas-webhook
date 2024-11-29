<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Enum;

enum Currency: string
{
    case HUF = 'HUF';
    case EUR = 'EUR';
    case AED = 'AED';
    case AUD = 'AUD';
    case BAM = 'BAM';
    case BGN = 'BGN';
    case CAD = 'CAD';
    case CHF = 'CHF';
    case CZK = 'CZK';
    case DKK = 'DKK';
    case GBP = 'GBP';
    case HKD = 'HKD';
    case HRK = 'HRK';
    case ISK = 'ISK';
    case JPY = 'JPY';
    case MDL = 'MDL';
    case MKD = 'MKD';
    case MYR = 'MYR';
    case MZN = 'MZN';
    case NOK = 'NOK';
    case NZD = 'NZD';
    case PLN = 'PLN';
    case QAR = 'QAR';
    case RON = 'RON';
    case RSD = 'RSD';
    case RUB = 'RUB';
    case SEK = 'SEK';
    case SGD = 'SGD';
    case TWD = 'TWD';
    case UAH = 'UAH';
    case USD = 'USD';

    public static function fromString(string $currency): self
    {
        return match ($currency) {
            'HUF' => self::HUF,
            'EUR' => self::EUR,
            'AED' => self::AED,
            'AUD' => self::AUD,
            'BAM' => self::BAM,
            'BGN' => self::BGN,
            'CAD' => self::CAD,
            'CHF' => self::CHF,
            'CZK' => self::CZK,
            'DKK' => self::DKK,
            'GBP' => self::GBP,
            'HKD' => self::HKD,
            'HRK' => self::HRK,
            'ISK' => self::ISK,
            'JPY' => self::JPY,
            'MDL' => self::MDL,
            'MKD' => self::MKD,
            'MYR' => self::MYR,
            'MZN' => self::MZN,
            'NOK' => self::NOK,
            'NZD' => self::NZD,
            'PLN' => self::PLN,
            'QAR' => self::QAR,
            'RON' => self::RON,
            'RSD' => self::RSD,
            'RUB' => self::RUB,
            'SEK' => self::SEK,
            'SGD' => self::SGD,
            'TWD' => self::TWD,
            'UAH' => self::UAH,
            'USD' => self::USD,
            default => throw new \InvalidArgumentException('Invalid currency: '.$currency),
        };
    }
}
