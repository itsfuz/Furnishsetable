@extends('layouts.masters')

@section('content')

<h1>Login Page</h1>


<form method="POST" action="/userlogin">
@csrf
    <div class="form-floating">
        <input type="username" name="username" class="form-control  @error('username') is-invalid @enderror" id="floatingInput" placeholder="poop123" required autocomplete="username" autofocus>
        <label for="floatingInput">Username</label>
          @error('username')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>

      <br>
      <div class="form-floating">
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>

      <button type="submit">login</button>
</form>

@endsection
