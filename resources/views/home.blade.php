@extends('layouts.masters')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
            <br>
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

             <p>test</p>

             <div class="p-1 my-container active-cont">
                Main Content Here
                ...
                Replace the menu toggle icon as per your needs
                <a class="btn border-0" id="menu-btn">
                  <i class="bx bx-menu"></i>
                </a>
              </div>
             <br>
             <br>
        </div>
    </div>
</div>
@endsection
