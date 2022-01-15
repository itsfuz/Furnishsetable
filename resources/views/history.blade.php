@extends('layouts.masters')


@section('content')

<div class="container"  style="align-items:center;  justify-content:center">
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



</div>

@endsection
