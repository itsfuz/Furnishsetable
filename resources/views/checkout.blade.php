@extends('layouts.masters')

@section('content')

<div class="col-md-auto">

    <h1 style="justify-content:center">Order Summary</h1>
    <br>
    <br>

    <div class="container" style="align-items:center">
        <table class="table">
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Subtotal</th>

              </tr>
              <tbody>
                @foreach ($CartItems as $item)
                <tr>
                    <th scope="col"><img src="{{Storage::url($item->image)}}" alt="image" style="width:200px;"></th>
                    <th scope="col">{{$item->name}}</th>
                    <th scope="col">{{$item->price}}</th>
                    <th scope="col">{{$item->quantity}}</th>
                    <th scope="col">{{$item->subtotal}}</th>

                </tr>
            </tbody>
            @endforeach
        </table>

    </div>
    <div class="col" style="text-align: center; font-size:20px">
        <h1>Total Price: {{$TotalCost}}</h1>

        <form action="/checkout/id" method="post">
            <div class="col-md-4 @error('payment_method') is-invalid @enderror" style="text-align: center">
                <label for="payment_method" class="col-md-4 col-form-label text-md-end"><b>{{ __('Payment Method') }}</b>:</label>
            </div>
            <br>
            <div class="col-md-2">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="payment_method" id="payment_method" value="Credit">
                    <label class="form-check-label" for="payment_method">Credit</label>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="payment_method" id="payment_method" value="Debit">
                    <label class="form-check-label" for="payment_method">Debit</label>                    </div>
                </div>
                @error('payment_method')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-md-auto">
                <a href="/checkout/{{auth()->user()->id}}"><button>Checkout</button></a>
            </div>
        </form>

    </div>
</div>

</div>

@endsection
