<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetails extends Model
{
    use HasFactory;

    protected $fillable = [

        'transaction_id',
        'product_name',
        'price',
        'quantity',
        'subtotal'
    ];

    public function Transaction(){

        return $this->belongsTo(Transaction::class);
    }

    public function Product(){

        return $this->hasOne(Furniture::class);
    }
}
