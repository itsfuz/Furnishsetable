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


        <div class="row">
            @for($i=0; $i<$counter; $i++)
            <div class="col" style="">
            <div class="card" style=" align-items:center; width:400px; height:400px;">
                <a href="/productDetail/{{$products[$i]['id']}}"><img class="card-img-top"  src="{{ Storage::url($products[$i]['image']) }}" alt="Furniture Image" style="padding: 2px; width:270px;"></a>
                <br>
                <h5>Product{{$products[$i]['product_name']}}</h5>
                <h6>{{$products[$i]['product_price']}}</h6>
                <h6>{{$products[$i]['color']}}</h6>
                <h6>{{$products[$i]['product_category']}}</h6>
                <br>
                <a href="/addToCart/{{$products[$i]['id']}}"><button type="submit">Add to Cart</button></a>
            </div>


        </div>
        @endfor
    </div>


</div>

@endsection
