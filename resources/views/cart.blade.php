@extends('layouts.masters')

@section('content')

@foreach ($CartItems as $item)

    <div class="card">
        <img src="{{Storage::url($item->image)}}" alt="image">
        <h3>{{$item->name}}</h3>
        <h3>{{$item->price}}</h3>
        <h3>{{$item->quantity}}</h3>
        <h3>{{$item->subtotal}}</h3>
    </div>

    <a href="/addQuantity/{{$item->product_id}}"><button>+</button></a>
    <a href="/minusQuantity/{{$item->product_id}}"><button>-</button></a>

@endforeach

<h1>Total Price: {{$TotalCost}}</h1>

<a href="/checkout/{{auth()->user()->id}}"><button>Checkout</button></a>

@endsection
