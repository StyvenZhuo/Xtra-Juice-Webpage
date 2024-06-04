<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =[
        'menu',
        'price',
        'id_product',
        'descript',
        'pic',
        'stat'
    ];
}
