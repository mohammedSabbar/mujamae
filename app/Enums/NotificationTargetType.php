<?php

namespace App\Enums;

enum NotificationTargetType: int
{
    case ALL = 0;
    case RESIDENTS = 1;
    case EMPLOYEES = 2;
    case CUSTOM = 3;

    public function label(): string
    {
        return match ($this) {
            self::ALL => 'الكل',
            self::RESIDENTS => 'الساكنين فقط',
            self::EMPLOYEES => 'الموظفين فقط',
            self::CUSTOM => 'مستخدمين محددين',
        };
    }
}
