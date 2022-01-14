@extends('layouts.masters')

@section('content')

<div class="card" style="display:flex; justify-content:center; text-align:center">
    <div class="card-header">
        <h3>Login</h3>
    </div>

    <form method="POST" action="/userlogin">
    @csrf

    <div style="padding: 100px">
        <div class="form-floating" style="width: 500px; justify-content:center">
            <input type="username" name="username" class="form-control  @error('username') is-invalid @enderror" id="floatingInput" placeholder="poop123" required autocomplete="username" autofocus>
            <label for="floatingInput">Username</label>
              @error('username')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>

          <br>
          <div class="form-floating"  style="width: 500px;  justify-content:center">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
          <br><br>
          <button type="submit" class="w-50 btn btn-warning" style="widh: 200px">login</button>
          <br>
          <p></p>
            <p  style="font-size: 12px">Don't have an account? Register <a href="/register" style="color: #D9534F">here</a>.</p>
    </div>

    </form>
</div>

@endsection
