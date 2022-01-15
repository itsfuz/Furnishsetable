<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetails;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //

    public function createTransaction(Request $request){

        $userID = auth()->user()->id;

        $Transaction = new Transaction();

        $Transaction->users_id = $userID;

        $Transaction->transaction_date = date('Y-m-d');

        $Transaction->payment_method = $request->payment_method;

        $Transaction->save();

        $TDItems = Cart::where('users_id', $userID)->get();

        foreach($TDItems as $item){

            $TransactionDetail = new TransactionDetails();

            $TransactionDetail->transaction_id = $Transaction->id;
            // $TransactionDetail->product_id = $item->product_id;
            $TransactionDetail->price = $item->price;
            // $TransactionDetail->image = $item->image;
            $TransactionDetail->quantity = $item->quantity;

            $productPrice = Product::where('id', $item->product_id)->first();

            $TransactionDetail->price = $productPrice->price;

            $TransactionDetail->subtotal = $item->subtotal;

            $TransactionDetail->product_name = $item->name;

            $TransactionDetail->save();
        }

        $removeFromCart = Cart::where('users_id', $userID)->first();

        while($removeFromCart != null){

            $removeFromCart->delete();

            $removeFromCart = Cart::where('users_id', $userID)->first();
        }

        return redirect('/home')
        ->with('notification', 'Transaction Complete!');
    }
}
