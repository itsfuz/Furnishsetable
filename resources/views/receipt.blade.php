@extends('layouts.masters')

@section('content')

    <div class="card">
        <div class="card-header">
            <h1>Transaction Receipt</h1>
        </div>

        <div class="upper-content">
            <h3>Transaction id</h3>
            <h3>Transaction date</h3>
            <h3>Payment method</h3>
        </div>
        {{-- garis lurus panjang memisahkan --}}
        <div  class="details">
            @foreach ($products as $product)
                <div>
                    <h3>product name</h3>
                </div>
                <div>
                    <h3>product price</h3>
                </div>
                <div>
                    <h3>product quantity</h3>
                </div>
                <div>
                    <h3>subtotal</h3>
                </div>
            @endforeach
        </div>

        {{-- another long line --}}

        <div class="summary">
            <h2>Total Price</h2>
        </div>


    </div>

@endsection

