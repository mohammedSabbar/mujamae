<?php

namespace App\Enums;

enum UserRole: int
{
    case ADMIN = 0;
    case ACCOUNTANT = 1;
    case SECURITY = 2;
    case SERVICE = 3;
    case RESIDENT = 4;

    public function label(): string
    {
        return match($this) {
            self::ADMIN => 'مدير النظام',
            self::ACCOUNTANT => 'محاسب',
            self::SECURITY => 'أمن',
            self::SERVICE => 'خدمات',
            self::RESIDENT => 'ساكن',
        };
    }
}
