@extends('layouts.masters')

@section('content')

@foreach ($CartItems as $item)

    <div class="card">
        <img src="{{$item->image}}" alt="image">
        <h3>{{$item->name}}</h3>
        <h3>{{$item->price}}</h3>
        <h3>{{$item->quantity}}</h3>
        <h3>{{$item->subtotal}}</h3>
    </div>

@endforeach

<h1>Total Price: {{$TotalCost}}</h1>

@endsection
