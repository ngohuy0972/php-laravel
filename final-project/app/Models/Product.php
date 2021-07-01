<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [

        'idSP',
        'name_product',
        'quantity',
        'categories',
        'image',
        'price'
    ];
}
