<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //

    public function viewCart($id){

        $CartItems = Cart::where('users_id', $id)->get();

        $TotalCost = 0;

        foreach($CartItems as $item){

            $TotalCost = $TotalCost + $item->subtotal;
        }

        return view('cart')
        ->with('CartItems', $CartItems)
        ->with('TotalCost', $TotalCost);

    }

    public function addToCart($id){

        $user = auth()->user()->id;

        $findItem = Cart::where('users_id', $user)->where('product_id', $id)->first();

        if($findItem){
            //jika ada item yang sama didalam cart
            $itemPrice = Product::find($id)->price;

            $findItem->quantity = $findItem->quantity + 1;

            $findItem->subtotal = $findItem->quantity*$itemPrice;

            $findItem->save();
        }
        else{
            //jika tidak ada item yang sama didalam cart
            $cart = new Cart();

            $cart->users_id = $user;

            $item = Product::find($id);

            $cart->product_id = $id;

            $cart->name = $item->product_name;

            $cart->quantity = 1;

            $cart->image = $item->image;

            $cart->subtotal = ($item->price*$cart->quantity);

            $cart->save();
        }

        return redirect()->back()
        ->with('notification', 'Item Added to Cart!');
    }

    public function addQuantity($id){

        $user = auth()->user()->id;

        $SelectedItem = Cart::where('users_id', $user)->where('product_id', $id)->first();

        $product = Product::find($id);

        $SelectedItem->quantity = $SelectedItem->quantity + 1;

        $SelectedItem->subtotal = $SelectedItem->subtotal + $product->price;

        $SelectedItem->save();

        return redirect()->back();
    }

    public function minusQuantity($id){

        $user = Auth()->user()->id;

        $SelectedItem = Cart::where('users_id', $user)->where('product_id', $id)->first();

        if($SelectedItem->quantity - 1 == 0){

            $SelectedItem->delete();
        }
        else{
            $SelectedItem->quantity = $SelectedItem->quantity - 1;
            $item = Product::find($id);

            $SelectedItem->subtotal = $SelectedItem->subtotal - $item->price;
            $SelectedItem->save();
        }

        return redirect()->back();
    }
}
