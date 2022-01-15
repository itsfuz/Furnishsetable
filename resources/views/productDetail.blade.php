@extends('layouts.masters')

@section('content')
<div class="col-md-auto" style="margin-bottom: 50px">
    <div class="card" style="width: 1000px">
        <div class="card-header  text-center">
            <h3><b>{{$products->product_name}}</b></h3>
        </div>
        <br>
            <div class="row justify-content-around" style=" align-items:center">
                <div class="col-md-5">
                <img class="card-img-top" src="{{ Storage::url($products->image)}}" alt="Furniture Image" style="width:450px;">
                    <br>
                </div>
                <div class="col-md-2">
                    <h6>Rp. {{$products->price}}</h6>
                    <h6>Color: {{$products->color}}</h6>
                    <h6>{{$products->categoryName}}</h6>
                    <h6>{{$products->description}}</h6>
                    <br><br>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-auto">
                    @auth
                        @if (auth()->user()->id != null)
                        <a href="/addToCart/{{$products->id}}"><button type="submit" class="btn btn-dark"  style="width: 200px">Add to Cart</button></a>
                        @endif
                        @else
                        <a href="/login"><button type="submit" class="btn btn-dark" style="width: 200px">Add to Cart</button></a>
                    @endauth
                </div>
            </div>
        <br><br>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-auto">
            <a href="/productDetail/{{($products->id)-1}}"><button type="button" class="btn btn-light"><img src="{{asset('images/back.png')}}" alt="Previous Item" style="width: 25px"></button></a>
        </div>
        <div class="col-md-auto">
            <a href="/products"><button type="button" class="btn btn-outline-secondary">Back to Products Page</button></a>
        </div>
        <div class="col-md-auto">
            <a href="/productDetail/{{($products->id)+1}}"><button type="button" class="btn btn-light"><img src="{{asset('images/next.png')}}" alt="Previous Item" style="width: 25px"></button></a>

        </div>

    </div>


</div>


@endsection
