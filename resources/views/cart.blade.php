@extends('layouts.masters')

@section('content')
<div class="col-md-auto">
    <div class="container" style="align-items:center">
        @if ($size == null)
            <div class="card-header" style="text-align: center">
                <h2>Shopping Cart</h2>
            </div>
            <div class="card" style="align-items: center; width:1000px">
                <br><br>
                <img src="{{asset('images/cart.png')}}" style="width: 250px"/>
                <br>
                <h3 style="color: rgb(255, 153, 0)">Your Shopping Cart is currently Empty :(</h3>
                <br><br>
                <div class="col-md-auto">
                    <a href="/products"> <button class="btn btn-warning" type="submit">Shop Now!</button></a>
                </div>
                <br><br>
            </div>
        @else
        <table class="table" style="display:flex">
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total Price</th>
                <th scope="col">Action</th>
            </tr>
                <tbody>
                    @foreach ($CartItems as $item)
                    <tr>
                        <th scope="col"><img src="{{Storage::url($item->image)}}" alt="image" style="width:200px;"></th>
                        <th scope="col">{{$item->name}}</th>
                        <th scope="col">{{$item->price}}</th>
                        <th scope="col">{{$item->quantity}}</th>
                        <th scope="col">{{$item->subtotal}}</th>
                        <th scope="col">
                            <a href="/minusQuantity/{{$item->product_id}}"><button type="button">-</button></a>
                            <a href="/addQuantity/{{$item->product_id}}"><button type="button">+</button></a>
                        </th>
                    </tr>
                </tbody>
            @endforeach
        </table>

        <div class="col" style="text-align: center; font-size:20px">
            <h1>Total Price: {{$TotalCost}}</h1>
                <div class="col-md-auto">
                    <a href="/goToCheckout/{{auth()->user()->id}}"><button type="submit" class="btn btn-dark">Checkout</button></a>
                </div>
        </div>

        @endif

    </div>

</div>


@endsection
