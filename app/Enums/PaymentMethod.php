<?php

namespace App\Enums;

enum PaymentMethod: int
{
    case CASH = 0;
    case ZAIN_CASH = 1;
    case KEY_CARD = 2;
    case VISA = 3;
    case MASTER = 4;

    public function label(): string
    {
        return match ($this) {
            self::ZAIN_CASH => 'زين كاش',
            self::KEY_CARD => 'كي كارد',
            self::VISA => 'فيزا',
            self::MASTER => 'ماستر كارد',
        };
    }
}
