@extends('layouts.masters')

@section('content')

<a href="/products">All Products</a>
<br>
<a href="/LivingRoomProducts/1">Living Room</a>
<br>
<a href="/BedroomProducts/2">Bedroom</a>
<br>
<a href="/KitchenProducts/3">Kitchen</a>
<br>
<a href="/BathroomProducts/4">Bathroom</a>

@for($i=0; $i<$counter; $i++)

    <div class="card">
        <img src="{{$products[$i]['image']}}" alt="this is for image">
        <h3>Product{{$products[$i]['product_name']}}</h3>
        <h3>{{$products[$i]['product_price']}}</h3>
        <h3>{{$products[$i]['color']}}</h3>
        <h3>{{$products[$i]['product_category']}}</h3>
        <a href="/addToCart/{{$products[$i]['id']}}"><button type="submit">Add to Cart</button></a>
    </div>

@endfor

@endsection
