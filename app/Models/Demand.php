<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{
    protected $fillable = [
        'from',
        'to',
        'date',
        'people',
        'airport',
        'name',
        'email',
        'phone',
    ];

    protected $casts = [
        'date' => 'date',
        'airport' => 'boolean',
    ];
}
