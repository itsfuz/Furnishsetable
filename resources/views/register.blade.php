@extends('layouts.masters')

@section('content')

<main class="forms">

    <div class="row justify-content-center">

        <div class="col-md-3">

            <form action="/UserRegistration" method="post">
                @csrf

                <h1 class="h3 mb-3 fw-normal">Fill the Form to Register</h1>

                <div class="form-floating">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Full Name" value="{{ old('username') }}">
                    <label for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Full Name" value="{{ old('email') }}">
                    <label for="email">Email</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Full Name" value="{{ old('password') }}">
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="password" name="confPassword" class="form-control @error('confPassword') is-invalid @enderror" id="confPassword" placeholder="Full Name" value="{{ old('confPassword') }}">
                    <label for="confPassword">Confirm Password</label>
                    @error('confPassword')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Register Account</button>
            </form>
        </div>
    </div>
</main>


@endsection
