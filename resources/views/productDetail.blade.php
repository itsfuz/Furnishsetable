@extends('layouts.masters')

@section('content')
<div class="card" style="width: 1000px; height:500px">

    <br>
        <div class="row justify-content-around" style=" align-items:center">

            <div class="col-md-5">
               <img class="card-img-top" src="{{ Storage::url($products->image)}}" alt="Furniture Image" style="width:450px;">
                <br>
            </div>
            <div class="col-md-2">
                <h4>{{$products->product_name}}</h4>
                <h6>Rp. {{$products->price}}</h6>
                <h6>Color: {{$products->color}}</h6>
                <h6>{{$products->categoryName}}</h6>
                <h6>{{$products->description}}</h6>
                <br>
                <a href="/addToCart/{{$products->id}}"><button type="submit" class="btn btn-dark">Add to Cart</button></a>
                <br>
            </div>
        </div>
</div>

@endsection
