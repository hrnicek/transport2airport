<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Demand extends Model
{
    protected $fillable = [
        'uuid',
        'from',
        'to',
        'date',
        'people',
        'airport',
        'name',
        'email',
        'phone',
        'note',
        'status',
    ];

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName()
    {
        return 'uuid';
    }

    protected $casts = [
        'date' => 'date',
        'airport' => 'boolean',
    ];

    /**
     *  Setup model event hooks
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }
}
