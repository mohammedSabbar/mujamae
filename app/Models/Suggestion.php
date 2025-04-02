<?php

namespace App\Models;

use App\Enums\SuggestionStatus;
use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    use HasUuids;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'user_id',
        'type',
        'message',
        'image',
        'status',
    ];

    protected $casts = [
        'status' => SuggestionStatus::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
