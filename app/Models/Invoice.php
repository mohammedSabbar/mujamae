<?php

namespace App\Models;

use App\Enums\InvoiceStatus;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasUuids;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['user_id', 'amount', 'description', 'due_date', 'status'];

    protected $casts = [
        'status' => InvoiceStatus::class,
        'due_date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Invoice.php

// User.php
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

}
