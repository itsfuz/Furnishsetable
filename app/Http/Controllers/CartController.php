<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //

    public function CartPage($id){

        $CartItems = Cart::where('users_id', $id)->get();

        $products = Product::all();

        $TotalCost = 0;

        foreach($CartItems as $item){

            $TotalCost = $TotalCost + $item->subtotal;
        }

        return view('cart')
        ->with('CartItems', $CartItems)
        ->;

    }
}
