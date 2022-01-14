@extends('layouts.masters')

@section('content')

@for($i=1; $i<=$productSize; $i++)

    <div class="card">

        <h3>Product{{$products[$i]['product_name']}}</h3>
        <h3>{{$products[$i]['product_price']}}</h3>
        <h3>{{$products[$i]['color']}}</h3>
        <h3>{{$products[$i]['product_category']}}</h3>
        <a href="/addToCart/{{$products[$i]['id']}}"><button type="submit">Add to Cart</button></a>
    </div>


@endfor


@endsection
