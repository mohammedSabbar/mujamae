<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Enums\UserRole;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasUuids;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $casts = [
        'role' => UserRole::class,
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
    public function accessPasses()
    {
        return $this->hasMany(AccessPass::class);
    }
    public function requestedTasks()
    {
        return $this->hasMany(Task::class, 'user_id');
    }

    public function assignedTasks()
    {
        return $this->hasMany(Task::class, 'employee_id');
    }
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
    public function fines()
    {
        return $this->hasMany(Fine::class, 'user_id');
    }

    public function issuedFines()
    {
        return $this->hasMany(Fine::class, 'security_id');
    }
    public function suggestions()
    {
        return $this->hasMany(Suggestion::class);
    }
    public function sentNotifications()
    {
        return $this->hasMany(Notification::class, 'sender_id');
    }

}
