<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'address',
        'city',
        'province',
        'country',
        'postal_code',
    ];

    protected $table = 'address';
}