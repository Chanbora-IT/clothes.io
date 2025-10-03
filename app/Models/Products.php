<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'stock_qty',
        'color',
        'size' ,
        'regular_price',
        'discount',
        'sale_price',
        'user_id',
        'category_id',
        'thumbnail',
        'description',
        'viewer',
    ];
}
