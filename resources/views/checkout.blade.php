@extends('layouts.masters')

@section('content')

<div class="container">

    <h1 style="text-align: center"><b>Order Summary</b></h1>
    <br>
    <br>

    <div class="card" style="text-align: center">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Subtotal</th>
                  </tr>
            </thead>

              <tbody>
                @foreach ($CartItems as $item)
                <tr style="align-items: center">
                    <th scope="col"><img src="{{Storage::url($item->image)}}" alt="image" style="width:200px;"></th>
                    <th scope="col">{{$item->name}}</th>
                    <th scope="col">Rp. {{$item->price}}</th>
                    <th scope="col">{{$item->quantity}}</th>
                    <th scope="col">Rp. {{$item->subtotal}}</th>

                </tr>
            </tbody>
            @endforeach
        </table>

    </div>
    <div class="col" style="text-align: center">
        <h3>Total Price: {{$TotalCost}}</h3>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="/checkout" method="post">
                    @csrf

                    <div class="row justify-content-center">
                        <div class="col-md-auto @error('payment_method') is-invalid @enderror">
                            <label for="payment_method" class=" col-form-label text-md-end"><b>{{ __('Payment Method') }}</b>:</label>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="payment_method" id="payment_method" value="Credit">
                                <label class="form-check-label" for="payment_method">Credit</label>
                            </div>
                        </div>
                        <div class="col-md-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="payment_method" id="payment_method" value="Debit">
                                <label class="form-check-label" for="payment_method">Debit</label>
                            </div>
                        </div>
                        <div class="col-md-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="payment_method" id="payment_method" value="GOPAY">
                                <label class="form-check-label" for="payment_method">GOPAY</label>
                            </div>
                        </div>
                        <div class="col-md-auto">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="payment_method" id="payment_method" value="OVO">
                                <label class="form-check-label" for="payment_method">OVO</label>
                            </div>
                        </div>
                            @error('payment_method')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                    </div>
                    <br>
                </form>
            </div>
        </div>
        <br>
        <div class="col-md-auto">
            <a href=""><button type="submit" class="btn btn-dark">Checkout</button></a>
        </div>
    </div>
</div>

@endsection
