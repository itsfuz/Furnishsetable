@extends('layouts.masters')


@section('content')

@foreach ($transactions as $transaction)

    <a href="/receipt/{{$id}}"><h3>transaction id</h3></a>
    <h3>transaction date</h3>
    <h3>payment method</h3>

@endforeach


@endsection
