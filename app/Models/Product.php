<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_product', 'url_image_product', 'description_product', 'price_product',
    ];

    protected $table = 'product';
}
