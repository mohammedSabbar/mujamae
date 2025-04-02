<?php

namespace App\Models;

use App\Enums\NotificationTargetType;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasUuids;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'sender_id',
        'title',
        'body',
        'target_type',
        'target_ids',
    ];

    protected $casts = [
        'target_ids' => 'array',
        'target_type' => NotificationTargetType::class,
    ];
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }
}
