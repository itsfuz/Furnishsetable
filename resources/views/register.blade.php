@extends('layouts.masters')

@section('content')

<main class="forms">

    <div class="card" style="display:flex; justify-content:center; text-align:center">
        <div class="card-header">
            <h3>Register</h3>
        </div>

        <form action="/UserRegistration" method="post">
            @csrf
            <div class="col" style="padding: 50px">
                <div class="form-floating"  style="width: 500px; justify-content:center">
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Full Name" value="{{ old('username') }}">
                    <label for="username">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br>
                <div class="form-floating"  style="width: 500px; justify-content:center">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Full Name" value="{{ old('email') }}">
                    <label for="email">Email</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br>
                <div class="form-floating"  style="width: 500px; justify-content:center">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Full Name" value="{{ old('password') }}">
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br>
                <div class="form-floating">
                    <input type="password" name="confPassword" class="form-control @error('confPassword') is-invalid @enderror" id="confPassword" placeholder="Full Name" value="{{ old('confPassword') }}">
                    <label for="confPassword">Confirm Password</label>
                    @error('confPassword')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                    <br>
                    <button class="btn btn-warning" type="submit">Register Account</button>
                    <br>
                    <p></p>
                    <p  style="font-size: 12px">Already have an account? Login <a href="/register" style="color: #D9534F">here</a>.</p>
                </form>
        </div>
    </div>
</main>


@endsection
