@extends('layouts.masters')

@section('content')

@foreach ($CartItems as $item)

    <div class="card">
        <img src="{{Storage::url($item->image)}}" alt="image" style="padding: 2px; width:200px;">
        <h5>{{$item->name}}</h5>
        <h5>{{$item->price}}</h5>
        <h5>{{$item->quantity}}</h5>
        <h5>{{$item->subtotal}}</h5>
        <a href="/addQuantity/{{$item->product_id}}"><button>+</button></a>
        <a href="/minusQuantity/{{$item->product_id}}"><button>-</button></a>

    </div>


@endforeach

<h1>Total Price: {{$TotalCost}}</h1>

<a href="/checkout/{{auth()->user()->id}}"><button>Checkout</button></a>

@endsection
