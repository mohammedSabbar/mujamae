<?php

namespace App\Enums;

enum AccessPassStatus: int
{
    case ACTIVE = 0;
    case USED = 1;
    case EXPIRED = 2;

    public function label(): string
    {
        return match ($this) {
            self::ACTIVE => 'فعال',
            self::USED => 'مستخدم',
            self::EXPIRED => 'منتهي',
        };
    }
}
