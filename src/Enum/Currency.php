<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Enum;

enum Currency: string
{
    case HUF = 'HUF';
    case EUR = 'EUR';
    case AED = 'AED';   // Emirati Dirham
    case AUD = 'AUD';   // Australian Dollar
    case BAM = 'BAM';   // Bosnian Convertible Marka
    case BGN = 'BGN';   // Bulgarian Lev
    case CAD = 'CAD';   // Canadian Dollar
    case CHF = 'CHF';   // Swiss Franc
    case CZK = 'CZK';   // Czech Koruna
    case DKK = 'DKK';   // Danish Krone
    case GBP = 'GBP';   // British Pound
    case HKD = 'HKD';   // Hong Kong Dollar
    case HRK = 'HRK';   // Croatian Kuna
    case ISK = 'ISK';   // Icelandic Krona
    case JPY = 'JPY';   // Japanese Yen
    case MDL = 'MDL';   // Moldovan Leu
    case MKD = 'MKD';   // Macedonian Denar
    case MYR = 'MYR';   // Malaysian Ringgit
    case MZN = 'MZN';   // Mozambican Metical
    case NOK = 'NOK';   // Norwegian Krone
    case NZD = 'NZD';   // New Zealand Dollar
    case PLN = 'PLN';   // Polish Zloty
    case QAR = 'QAR';   // Qatari Riyal
    case RON = 'RON';
    case RSD = 'RSD';   // Serbian Dinar
    case RUB = 'RUB';   // Russian Ruble
    case SEK = 'SEK';   // Swedish Krona
    case SGD = 'SGD';   // Singapore Dollar
    case TWD = 'TWD';   // Taiwan Dollar
    case UAH = 'UAH';   // Ukraine Hryvnia
    case USD = 'USD';   // US Dollar

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
