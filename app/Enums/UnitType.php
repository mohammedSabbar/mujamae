<?php

namespace App\Enums;

enum UnitType: int
{
    case APARTMENT = 0;
    case HOUSE = 1;
    case SHOP = 2;

    public function label(): string
    {
        return match ($this) {
            self::APARTMENT => 'شقة',
            self::HOUSE => 'بيت',
            self::SHOP => 'محل',
        };
    }
}
