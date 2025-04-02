<?php

namespace App\Enums;

enum UnitStatus: int
{
    case AVAILABLE = 0;
    case RENTED = 1;
    case OWNED = 2;

    public function label(): string
    {
        return match ($this) {
            self::AVAILABLE => 'متاحة',
            self::RENTED => 'مؤجرة',
            self::OWNED => 'مملوكة',
        };
    }
}
