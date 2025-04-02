<?php

namespace App\Models;

use App\Enums\PaymentMethod;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasUuids;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['invoice_id', 'amount', 'method', 'paid_at'];

    protected $casts = [
        'paid_at' => 'datetime',
        'method' => PaymentMethod::class,
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
