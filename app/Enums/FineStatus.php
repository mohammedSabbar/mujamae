<?php

namespace App\Enums;

enum FineStatus: int
{
    case PENDING = 0;    // قيد المراجعة
    case APPROVED = 1;   // مؤكدة
    case REJECTED = 2;   // مرفوضة
    case PAID = 3;       // مدفوعة

    public function label(): string
    {
        return match ($this) {
            self::PENDING => 'قيد المراجعة',
            self::APPROVED => 'مؤكدة',
            self::REJECTED => 'مرفوضة',
            self::PAID => 'مدفوعة',
        };
    }
}
