<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    protected $fillable = [
        'outlet_name',
        'hotline',
        'email',
        'address',
        'user_id',
    ];
}
