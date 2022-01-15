@extends('layouts.masters')

@section('content')

<link rel="stylesheet" href="style.css">

<div class="col-md-auto" style="margin-bottom: 50px">
    <div class="card-header  text-center">
        <h1 style="color:Tomato;"><b>On Sale!</b></h1>
    </div>
    
    <div class="slider">
        <div class="slides">
            <!--button-->
            <input type="radio" name="radio-button" id="radio1">
            <input type="radio" name="radio-button" id="radio2">
            <input type="radio" name="radio-button" id="radio3">
            <input type="radio" name="radio-button" id="radio4">

            <!--image-->
            <div class="slide first">
                <img src="" alt="">
            </div>
            <div class="slide">
                <img src="" alt="">
            </div>
            <div class="slide">
                <img src="" alt="">
            </div>
            <div class="slide">
                <img src="" alt="">
            </div>

            <!--automatic nav-->
            <div class="auto-nav">
                <div class="auto-button1"></div>
                <div class="auto-button2"></div>
                <div class="auto-button3"></div>
                <div class="auto-button4"></div>
            </div>
        </div>

        <!--manual nav-->
        <div class="manual-nav">
            <label for="radio1" class="manual-button"></label>
            <label for="radio2" class="manual-button"></label>
            <label for="radio3" class="manual-button"></label>
            <label for="radio4" class="manual-button"></label>
        </div>

    </div>
</div>

<script type="text/javascript">
    var counter = 1;
    setInterval(function(){
        document.getElementById('radio' + counter).checked = true;
        counter++;

        if(counter > 4){
            counter = 1;
        }
    }, 5000);
</script>

<div class="container">
    <div class="row justify-content-center">
        TEST
    </div>
</div>
@endsection
