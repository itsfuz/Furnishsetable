@extends('layouts.masters')

@section('content')
<div class="col">
    <div class="row">
        <div class="col">
            <a href="/products">All Products</a>
        </div>
       <div class="col">
        <a href="/LivingRoomProducts/1">Living Room</a>
       </div>
       <div class="col">
        <a href="/BedroomProducts/2">Bedroom</a>
       </div>
       <div class="col">
        <a href="/KitchenProducts/3">Kitchen</a>
       </div>
       <div class="col">
        <a href="/BathroomProducts/4">Bathroom</a>
       </div>

    </div>

    <br>

    <div class="row" style="justify-content:center; display:flex">


        @for($i=0; $i<$counter; $i++)

        <div class="card" style="width:400px; align-items:center">
            <img src="{{$products[$i]['image']}}" alt="this is for image">
            <h4>Product{{$products[$i]['product_name']}}</h4>
            <h5>{{$products[$i]['product_price']}}</h5>
            <h5>{{$products[$i]['color']}}</h5>
            <h5>{{$products[$i]['product_category']}}</h5>
            <a href="/addToCart/{{$products[$i]['id']}}"><button type="submit">Add to Cart</button></a>
        </div>

    @endfor

    </div>


</div>

@endsection
