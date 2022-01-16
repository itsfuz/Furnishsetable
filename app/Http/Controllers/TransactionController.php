<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    //

    public function createTransaction(Request $request){
        $rules = [
            'payment_method' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
             return back()->withErrors($validator);
        }

        $userID = auth()->user()->id;

        $Transaction = new Transaction();

        $Transaction->users_id = $userID;

        $Transaction->transaction_date = date('Y-m-d');

        // dd($Transaction->transacti)

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

        $TD = TransactionDetails::where('transaction_id', $Transaction->id)->get();
        // dd($TD);
        $Total = 0;
        foreach ($TD as $t){
            $Total = $Total + $t->subtotal;
        }

        return view('/receipt')
        ->with('Transaction', $Transaction)
        ->with('TD', $TD)
        ->with('Total', $Total);
    }

    public function viewReceipt($id){

        $Transaction = Transaction::find($id);
        $TD = TransactionDetails::where('transaction_id', $id)->get();

        $Total = 0;
        foreach ($TD as $t){
            $Total = $Total + $t->subtotal;
        }

        return view('/receipt')
        ->with('Transaction', $Transaction)
        ->with('TD', $TD)
        ->with('Total', $Total);
    }

    public function viewHistory(){

        $Transactions = Transaction::where('users_id', Auth()->user()->id)->get();
        $size = sizeof($Transactions);

        return view('history')
        ->with('Transactions', $Transactions)
        ->with('size', $size);
    }
}
