@extends('layouts.masters')

@section('content')

@foreach ($products as $product)

    <div class="card">

        <h3>'product name'</h3>
        <h3>'price'</h3>
        <h3>'color</h3>
        <h3>'category'</h3>
        <a href="/addToCart"><button type="submit">Add to Cart</button></a>
    </div>
@endforeach


@endsection
