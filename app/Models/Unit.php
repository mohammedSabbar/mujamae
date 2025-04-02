<?php

namespace App\Models;

use App\Enums\UnitStatus;
use App\Enums\UnitType;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $casts = [
        'type' => UnitType::class,
        'status' => UnitStatus::class,
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function building()
    {
        return $this->belongsTo(Building::class);
    }

}
