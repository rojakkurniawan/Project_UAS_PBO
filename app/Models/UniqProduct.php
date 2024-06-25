<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_1', 'judul_2', 'judul_3', 'judul_4', 'judul_5', 'judul_6', 'desc_1', 'desc_2', 'desc_3', 'desc_4', 'desc_5', 'desc_6',
    ];

    protected $table = 'uniq_product';

    protected $primaryKey = 'id_product';
}
