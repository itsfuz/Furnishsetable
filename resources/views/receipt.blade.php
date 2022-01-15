@extends('layouts.masters')

@section('content')

    <div class="card">
        <div class="card-header">
            <h1>Transaction Receipt</h1>
        </div>

        <div class="upper-content">
            <h3>{{$Transaction->id}}</h3>
            <h3>{{$Transaction->transaction_date}}</h3>
            <h3>{{$Transaction->payment_method}}</h3>
        </div>
        {{-- garis lurus panjang memisahkan --}}
        <div  class="details">
            @foreach ($TD as $detail)
                <div>
                    <h3>{{$detail->product_name}}</h3>
                </div>
                <div>
                    <h3>{{$detail->price}}</h3>
                </div>
                <div>
                    <h3>{{$detail->quantity}}</h3>
                </div>
                <div>
                    <h3>{{$detail->subtotal}}</h3>
                </div>
            @endforeach
        </div>

        {{-- another long line --}}

        <div class="summary">
            <h2>{{$Total}}</h2>
        </div>


    </div>

@endsection

