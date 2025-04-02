<?php

namespace App\Models;

use App\Enums\AccessPassStatus;
use App\Enums\AccessPassType;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class AccessPass extends Model
{
    use HasUuids;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'user_id',
        'code',
        'guest_name',
        'vehicle_info',
        'type',
        'status',
        'expires_at',
    ];

    protected $casts = [
        'type' => AccessPassType::class,
        'status' => AccessPassStatus::class,
        'expires_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
