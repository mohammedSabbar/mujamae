<?php

namespace App\Enums;

enum AccessPassType: int
{
    case TEMPORARY = 0;
    case PERMANENT = 1;

    public function label(): string
    {
        return match ($this) {
            self::TEMPORARY => 'مؤقت',
            self::PERMANENT => 'دائم',
        };
    }
}
