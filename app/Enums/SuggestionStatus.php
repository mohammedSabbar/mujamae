<?php

namespace App\Enums;

enum SuggestionStatus: int
{
    case NEW = 0;
    case IN_PROGRESS = 1;
    case RESOLVED = 2;
    case CLOSED = 3;

    public function label(): string
    {
        return match ($this) {
            self::NEW => 'جديدة',
            self::IN_PROGRESS => 'قيد المعالجة',
            self::RESOLVED => 'تمت معالجتها',
            self::CLOSED => 'مغلقة',
        };
    }
}
