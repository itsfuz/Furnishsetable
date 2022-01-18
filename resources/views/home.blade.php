@extends('layouts.masters')

@section('content')

<div class="container" style="display: flex;justify-content:center">

    <div class="col-md-auto">
        <div class="card" style="width: 820px; height: 500px;" >
            <div class="card-header  text-center">
                <h1 style="color:sandybrown;"><b>On Sale!</b></h1>
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
                        <img src="{{asset('images/home1.jpg')}}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{asset('images/home2.jpg')}}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{asset('images/home3.png')}}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{asset('images/home4.jpeg')}}" alt="">
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
@endsection
