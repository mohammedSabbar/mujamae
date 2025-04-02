<?php

namespace App\Models;

use App\Enums\FineStatus;
use Illuminate\Database\Eloquent\Model;

class Fine extends Model
{
    use HasUuids;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'user_id',
        'security_id',
        'amount',
        'reason',
        'image',
        'status',
    ];

    protected $casts = [
        'status' => FineStatus::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function security()
    {
        return $this->belongsTo(User::class, 'security_id');
    }

}
