<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'product_id',
        'name',
        'quantity',
        'price',
        'subtotal',
        'image'

    ];

    public function User(){

        return $this->belongsTo(User::class);
    }

    public function Transaction(){

        return $this->hasOne(Transaction::class);
    }

    public function Product(){

        return $this->hasMany(Product::class);
    }
}
