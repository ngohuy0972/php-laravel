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

    public function scopeFliterName($query) {
        if (request()->filter){
            $filter = request()->filter;
            $query->orderBy('name_product', 'ASC');
        }

        return $query;
    }

    public function scopeFilterNewset($query) {
        if (request()->filter){
            $filter = request()->filter;
            $query->orderBy('created_at', 'ASC');
        }

        return $query;
    }

    public function scopeFilterPrice($query) {
        if (request()->filter){
            $filter = request()->filter;
            $query->sorderBy('price', 'ASC');
        }

        return $query;
    }
}
