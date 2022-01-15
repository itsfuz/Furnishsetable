@extends('layouts.masters')

@section('content')

<div class="container" style="">

    <div class="row" style="padding:5px; border-bottom: 1px solid black; display:flex;">
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
       <div class="col">
        <a href="/OthersProducts/5">Others</a>
       </div>

    </div>

    <br>

        <div class="row" style="">
            @for($i=0; $i<$counter; $i++)
            <div class="col" style="">
            <div class="card" style=" align-items:center; width:400px; height:450px;">
                <a href="/productDetail/{{$products[$i]['id']}}"><img class="card-img-top"  src="{{ Storage::url($products[$i]['image']) }}" alt="Furniture Image" style="padding: 2px; width:200px;"></a>
                <br>
                <h5><a href="/productDetail/{{$products[$i]['id']}}">{{$products[$i]['product_name']}}</a></h5>
                <br>
                <h6>Rp. {{$products[$i]['product_price']}}</h6>
                <br>
                <h6>{{$products[$i]['product_category']}}</h6>
                <br>
                @auth()
                @if (auth()->user()->id != null)

                <a href="/addToCart/{{$products[$i]['id']}}"><button type="submit" class="btn btn-dark">Add to Cart</button></a>
                @endif
                @else
                <a href="/login"><button type="submit" class="btn btn-dark">Add to Cart</button></a>

                @endauth
                <br>
            </div>


        </div>
            @endfor
    </div>


</div>
    <script>
        $('#myTab a').on('click', function (e) {
  e.preventDefault()
  $(this).tab('show')
})
    </script>
@endsection
