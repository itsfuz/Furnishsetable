@extends('layouts.masters')

@section('content')

<div class="container" style="display: flex;justify-content:center">

    <div class="col">
        <div>
            <div class="slider">
                <div class="slides">
                    <!--button-->

                        <input type="radio" name="radio-button" id="radio1">
                        <input type="radio" name="radio-button" id="radio2">
                        <input type="radio" name="radio-button" id="radio3">
                        <input type="radio" name="radio-button" id="radio4">


                    <!--image-->
                    <div class="slide first">
                        <img src="{{asset('images/homepage1.png')}}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{asset('images/homepage2.png')}}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{asset('images/homepage3.png')}}" alt="">
                    </div>
                    <div class="slide">
                        <img src="{{asset('images/homepage4.png')}}" alt="">
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
                <div class="manual-nav"  style="display:flex; justify-content:center">
                    <label for="radio1" class="manual-button"></label>
                    <label for="radio2" class="manual-button"></label>
                    <label for="radio3" class="manual-button"></label>
                    <label for="radio4" class="manual-button"></label>
                </div>

            </div>
        </div>
        <br><br>
        <h1 style="text-align: center">Our Collection</h1>
        <div  class="row" style="">
            <div class="col" style="width: 300px; height: 300px; background-color:sandybrown ; text-align:center;">
                <img src="{{asset('images/living-room.jpg')}}" alt="" style="width: 200px; height: 300px;object-fit: cover;">

                <h6>Living Room</h6>
            </div>
            <div class="col" style="width: 300px; height: 300px; background-color:sandybrown ; text-align:center;">
                <img src="{{asset('images/bedroom.jpg')}}" alt="" style="width: 200px; height: 300px;object-fit: coverl;">
                <h6>Bedroom</h6>
            </div>
            <div class="col" style="width: 300px; height: 300px; background-color:sandybrown ; text-align:center;">
                <img src="{{asset('images/kitchen.jpeg')}}" alt="" style="width: 200px; height: 300px;object-fit: cover;">
                <h6>Kitchen</h6>
            </div>
            <div class="col" style="width: 300px; height: 300px;background-color:sandybrown ; text-align:center;">
                <img src="{{asset('images/bathroom.jpeg')}}" alt="" style="width: 200px; height: 300px;object-fit: cover;">
                <h6>Bathroom</h6>
            </div>
        </div>
        <br><br>
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
