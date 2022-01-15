@extends('layouts.masters')

@section('content')
<div class="col-md-auto" style="margin-bottom: 50px">
    <div class="card-header  text-center">
        <b>{{$products->product_name}}</b>
    </div>
    <div class="card" style="width: 1000px; height:500px">

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
                    <br>

                    <br>
                </div>
            </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-auto">
            <a href="/products"><button type="button" class="btn btn-dark">Back</button></a>

        </div>
        <div class="col-md-auto">
            <a href="/productDetail/{{($products->id)-1}}"><button type="button" class="btn btn-dark">Previous Item</button></a>

        </div>
        <div class="col-md-auto">
            <a href="/productDetail/{{($products->id)+1}}"><button type="button" class="btn btn-dark">Next Item</button></a>

        </div>

        <div class="col-md-auto">
            @auth()
                @if (auth()->user()->id != null)
                <a href="/addToCart/{{$products->id}}"><button type="submit" class="btn btn-dark">Add to Cart</button></a>
                @endif
                @else
                <a href="/login"><button type="submit" class="btn btn-dark">Add to Cart</button></a>

            @endauth
        </div>
    </div>


</div>


@endsection
