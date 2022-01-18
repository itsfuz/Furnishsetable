@extends('layouts.masters')

@section('content')

@if (session()->has('notification'))
<br>
    <div classs="container">
        <div class="row no-gutters fixed-top justify-content-center" style="padding:30px">
            <div class="col-sm-3">
                <div class="alert alert-success fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="True">&times;</span>
                      </button>
                     <p class="alert-heading" style="text-align: center">{{ session('notification') }}</p>
                </div>
            </div>
        </div>
    </div>
@endif

<div class="container">
    <div class="productNavbar">
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
    </div>
    <br>
        <div class="row">
            @for($i=0; $i<$counter; $i++)
            <div class="col">
                <div class="card" style=" align-items:center; width:400px; height:450px;">
                    <a href="/productDetail/{{$products[$i]['id']}}"><img class="card-img-top"  src="{{ Storage::url($products[$i]['image']) }}" alt="Furniture Image" style="padding: 2px; width:200px;"></a>
                    <br>

                    <h5><a id="linkDetail" href="/productDetail/{{$products[$i]['id']}}">{{$products[$i]['product_name']}}</a></h5>
                    <br>
                    <h6>Product ID: {{$products[$i]['id']}}</h6>
                    <h6>Rp. {{$products[$i]['product_price']}}</h6>
                    <h6>{{$products[$i]['color']}}</h6>
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
        $('.alert').alert()
    </script>
@endsection
