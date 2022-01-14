<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'category_id',
        'color',
        'image',
        'price',
        'description'

    ];

    public function Category(){

        return $this->hasOne(Category::class);
    }

    public function Cart(){

        return $this->belongsToMany(Cart::class);
    }
}
