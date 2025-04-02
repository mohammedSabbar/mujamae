<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Model;
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;

class Complex extends BaseTenant
{
    protected $table = 'complexes';
}
