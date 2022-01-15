<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'transaction_date',
        'payment_method'
    ];


    public function User(){

        return $this->belongsTo(User::class);
    }

    public function TransactionDetails(){

        return $this->hasMany(TransactionDetails::class);
    }
}
