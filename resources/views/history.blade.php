@extends('layouts.masters')


@section('content')

<div class="container"  style="align-items:center;  justify-content:center; display:flex">
    @if ($size == null)

    <div class="card" style="align-items: center; width:1000px; box-shadow: 5px 5px 10px grey">
        <br><br><br>
        <img src="{{asset('images/no-transaction.png')}}" style="width: 250px"/>
        <br>
        <h3 style="color: rgb(255, 153, 0)"><b> You have no transactions.</b></h3>
        <br><br>
        <div class="col-md-auto">
            <a href="/products"> <button class="btn btn-dark" type="submit">Shop Now!</button></a>
        </div>
        <br><br>
    </div>
@else
    <h3 style="text-align: center"><b>Transaction History</b></h3>
    <br>
    <table  class="table table-bordered" style="text-align: center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Transaction ID</th>
                <th scope="col">Transaction Date</th>
                <th scope="col">Payment Method</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($Transactions as $transaction)
            <tr>
                <th><div class="content" style="color: orange"><a href="/receipt/{{$transaction->id}}">{{$transaction->id}}</a></th>
                <th>{{$transaction->transaction_date}}</th>
                <th>{{$transaction->payment_method}}</th>
            </tr>
            @endforeach
        </tbody>
    </table>

@endif

</div>

@endsection
