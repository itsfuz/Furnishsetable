@extends('layouts.masters')


@section('content')

<div style="flex-direction:row; display:flex">
    @foreach ($Transactions as $transaction)

    <div class="content"><a href="/receipt/{{$transaction->id}}"><h3>{{$transaction->id}}</h3></a></div>
    <p>this is supposed to be spaced out</p>
    <div><h3>{{$transaction->transaction_date}}</h3></div>
    <p>this is supposed to be spaced out</p>
    <div><h3>{{$transaction->payment_method}}</h3></div>

@endforeach
</div>

@endsection
