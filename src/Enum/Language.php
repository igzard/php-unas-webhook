<?php

declare(strict_types=1);

namespace Igzard\PhpUnasWebhook\Enum;

enum Language: string
{
    case HU = 'hu';
    case AL = 'al';                // Albán
    case AU = 'au';          // Angol (AU)
    case US = 'us';          // Angol (US)
    case AR = 'ar';                // Arab
    case BG = 'bg';             // Bolgár
    case BA = 'ba';              // Bosnyák
    case CZ = 'cz';               // Cseh
    case DK = 'dk';                 // Dán
    case EE = 'ee';            // Észt
    case FI = 'fi';                 // Finn
    case FR = 'fr';              // Francia
    case BE = 'be';         // Francia (BE)
    case GR = 'gr';              // Görög
    case CY = 'cy';         // Görög (CY)
    case HE = 'he';                 // Héber
    case IN = 'in';                 // Hindi
    case NL = 'nl';            // Holland
    case HR = 'hr';              // Horvát
    case IE = 'ie';               // Ír
    case JP = 'jp';              // Japán
    case CN = 'cn';               // Kínai
    case PL = 'pl';                // Lengyel
    case LV = 'lv';              // Lett
    case LT = 'lt';           // Litván
    case MK = 'mk';            // Macedón
    case MY = 'my';                 // Maláj
    case MT = 'mt';                 // Máltai
    case MD = 'md';             // Moldáv
    case DE = 'de';               // Német
    case AT = 'at';          // Német (AT)
    case CH = 'ch';          // Német (CH)
    case NO = 'no';                 // Norvég
    case IT = 'it';              // Olasz
    case RU = 'ru';               // Orosz
    case PT = 'pt';             // Portugál
    case RO = 'ro';                // Román
    case ES = 'es';               // Spanyol
    case SE = 'se';               // Svéd
    case RS = 'rs';               // Szerb
    case SK = 'sk';            // Szlovák
    case SI = 'si';           // Szlovén
    case TR = 'tr';                // Török
    case UA = 'ua';           // Ukrán
    case VN = 'vn';            // Vietnámi

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
