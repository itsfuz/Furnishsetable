@extends('layouts.masters')

@section('content')

<div class="container" style="justify-content: center; display:flex">
    <div class="card" style="width:800px; padding:100px; align-items:center">
        <h3><b>Transaction Receipt</b></h3>
        <br>
        <table class="table" style="border-collapse: collapse; border: none; text-align:left">
            <tr style="border: none;">
                <td style="border: none;"><b>Transaction ID: </b>{{$Transaction->id}}</td>
            </tr>
            <tr style="border: none;">
                <td style="border: none;"><b>Transaction Date: </b>{{$Transaction->transaction_date}}</td>
            </tr>
            <tr style="border: none;">
                <td style="border: none;"><b>Payment Method: </b>{{$Transaction->payment_method}}</td>
            </tr>
        </table>

        <table class="table">
            <thead>
              <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Quantity</th>
                <th scope="col" style="text-align: center">Price</th>
                <th scope="col" style="text-align: right">Subtotal</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($TD as $detail)
                <tr>
                    <td  scope="col">{{$detail->product_name}}</td>
                    <td  scope="col">{{$detail->price}}</td>
                    <td  scope="col" style="text-align: center">{{$detail->quantity}}</td>
                    <td  scope="col" style="text-align: right">{{$detail->subtotal}}</td>

                </tr>
            @endforeach
            </tbody>
            <thead class="thead-light">
                <tr>
                    <td></td>
                    <td></td>
                    <th scope="col" style="text-align: center" class="alignright">Total:</th>
                    <th scope="col" style="text-align: right" class="alignright">{{$Total}}</th>
                </tr>
            </thead>
            <thead></thead>
          </table>
          <br><br>
        <p>Furnishsetable</p>
    </div>
</div>


@endsection

