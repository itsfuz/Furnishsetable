@extends('layouts.masters')

@section('content')

    <div class="container" style="align-items:center;  justify-content:center; display:flex">
        @if ($size == null)

            <div class="card" style="align-items: center; width:1000px;">
                <div class="card-header" style="text-align: center; width:1000px;">
                    <h2>Shopping Cart</h2>
                </div>
                <br><br>
                <img src="{{asset('images/cart.png')}}" style="width: 250px"/>
                <br>
                <h3 style="color: rgb(255, 153, 0)"><b> Your Shopping Cart is currently Empty :(</b></h3>
                <br><br>
                <div class="col-md-auto">
                    <a href="/products"> <button class="btn btn-dark" type="submit">Shop Now!</button></a>
                </div>
                <br><br>
            </div>
        @else
        <h2 style="text-align: center"><b>Shopping Cart</b></h2>
        <br>
        <div class="card"  style="align-items: center">
            <table class="table" style="text-align: center">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                    <tbody>
                        @foreach ($CartItems as $item)
                        <tr>
                            <th><img src="{{Storage::url($item->image)}}" alt="image" style="width:200px;"></th>
                            <td>{{$item->name}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->quantity}}</td>
                            <td>{{$item->subtotal}}</td>
                            <td>
                                <a href="/minusQuantity/{{$item->product_id}}"><button type="button" class="btn btn-danger">-</button></a>
                                <a href="/addQuantity/{{$item->product_id}}"><button type="button" class="btn btn-success">+</button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>
            <br>
            <div class="col" style="text-align: center; font-size:20px">
                <h3>Total Price: Rp. {{$TotalCost}}</h3>
                <br>
                    <div class="col-md-auto">
                        <a href="/goToCheckout/{{auth()->user()->id}}"><button type="submit" class="btn btn-dark">Checkout</button></a>
                    </div>
            </div>

            <br><br>
        </div>

        @endif

    </div>

@endsection
