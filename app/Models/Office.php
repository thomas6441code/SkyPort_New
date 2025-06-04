<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Office extends Model
{
    use HasFactory;

    protected $casts = [
        'coordinates' => 'array',
    ];

    protected $fillable = [
        'country',
        'city',
        'address',
        'email',
        'phone',
        'hours',
        'color',
        'coordinates'
    ];
}
