<?php

namespace App\Enums;

enum TaskStatus: int
{
    case NEW = 0;
    case IN_PROGRESS = 1;
    case COMPLETED = 2;
    case CANCELLED = 3;

    public function label(): string
    {
        return match ($this) {
            self::NEW => 'جديدة',
            self::IN_PROGRESS => 'قيد التنفيذ',
            self::COMPLETED => 'مكتملة',
            self::CANCELLED => 'ملغاة',
        };
    }
}
