<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Enum;

enum Language: string
{
    case HU = 'hu';
    case AL = 'al';
    case AU = 'au';
    case US = 'us';
    case AR = 'ar';
    case BG = 'bg';
    case BA = 'ba';
    case CZ = 'cz';
    case DK = 'dk';
    case EE = 'ee';
    case FI = 'fi';
    case FR = 'fr';
    case BE = 'be';
    case GR = 'gr';
    case CY = 'cy';
    case HE = 'he';
    case IN = 'in';
    case NL = 'nl';
    case HR = 'hr';
    case IE = 'ie';
    case JP = 'jp';
    case CN = 'cn';
    case PL = 'pl';
    case LV = 'lv';
    case LT = 'lt';
    case MK = 'mk';
    case MY = 'my';
    case MT = 'mt';
    case MD = 'md';
    case DE = 'de';
    case AT = 'at';
    case CH = 'ch';
    case NO = 'no';
    case IT = 'it';
    case RU = 'ru';
    case PT = 'pt';
    case RO = 'ro';
    case ES = 'es';
    case SE = 'se';
    case RS = 'rs';
    case SK = 'sk';
    case SI = 'si';
    case TR = 'tr';
    case UA = 'ua';
    case VN = 'vn';

    public static function fromString(string $country): self
    {
        return match ($country) {
            'hu' => self::HU,
            'al' => self::AL,
            'au' => self::AU,
            'us' => self::US,
            'ar' => self::AR,
            'bg' => self::BG,
            'ba' => self::BA,
            'cz' => self::CZ,
            'dk' => self::DK,
            'ee' => self::EE,
            'fi' => self::FI,
            'fr' => self::FR,
            'be' => self::BE,
            'gr' => self::GR,
            'cy' => self::CY,
            'he' => self::HE,
            'in' => self::IN,
            'nl' => self::NL,
            'hr' => self::HR,
            'ie' => self::IE,
            'jp' => self::JP,
            'cn' => self::CN,
            'pl' => self::PL,
            'lv' => self::LV,
            'lt' => self::LT,
            'mk' => self::MK,
            'my' => self::MY,
            'mt' => self::MT,
            'md' => self::MD,
            'de' => self::DE,
            'at' => self::AT,
            'ch' => self::CH,
            'no' => self::NO,
            'it' => self::IT,
            'ru' => self::RU,
            'pt' => self::PT,
            'ro' => self::RO,
            'es' => self::ES,
            'se' => self::SE,
            'rs' => self::RS,
            'sk' => self::SK,
            'si' => self::SI,
            'tr' => self::TR,
            'ua' => self::UA,
            'vn' => self::VN,
            default => throw new \InvalidArgumentException('Invalid language: '.$country),
        };
    }
}
