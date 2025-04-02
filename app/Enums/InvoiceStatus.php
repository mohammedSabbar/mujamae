<?php

namespace App\Enums;

enum InvoiceStatus: int
{
    case UNPAID = 0;
    case PAID = 1;
    case OVERDUE = 2;

    public function label(): string
    {
        return match ($this) {
            self::UNPAID => 'غير مدفوعة',
            self::PAID => 'مدفوعة',
            self::OVERDUE => 'متأخرة',
        };
    }
}
