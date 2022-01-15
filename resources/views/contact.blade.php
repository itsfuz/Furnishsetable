@extends('layouts.masters')


@section('content')
<div class="booba">
    <br>
        <h3 style="text-align: center"><b>Contact Us</b></h3>
<div class="slide" id="slide5" data-slide="5" data-stellar-background-ratio="0.5">
	<div class="container clearfix">
		<div class="content grid_12 contactmap dn" id="contact-phone">
			<div class="grid_4">
				<h2>TELEPHONE</h2>
				<p class="information"><span class="icon-location"> have question? </span>feel free to ask our staff directly</p>
			</div>
			<div class="grid_8 omega">
                <div class="grid_6 omega">+62 812 6969 6907</div>
			</div>
		</div>

		<div class="content grid_12 contactmap dn" id="contact-mail">
			<div class="grid_4">
				<h2>E-MAIL</h2>
				<p class="information"><span class="icon-location"> have a question that cannot be asked in person, well e-mail us</p>
			</div>
			<div class="grid_8 omega">
				<div class="grid_6 omega"><a href="mailto:mail@loremipsum.com?Subject=Hello" class="btn">mail@loremipsum.com</a></div>
			</div>
		</div>

        <div class="content grid_12 contactmap" id="contact-map">
			<div class="grid_4">
				<h2>CONTACT</h2>
				<p class="information"><span class="icon-location"> not familiar with our simple map?, get direction to our closess head office</span>Maecenas faucibus mollis interdum.</p>
				<a class="btn" href="https://goo.gl/maps/8GlbZ" target="_blank">Get Direction</a>
				<div class="clear"></div>
			</div>
			<div class="grid_8 omega">
				<div id="map_canvas"></div>
			</div>
		</div>

		<div class="clear"></div>

		<footer class="content grid_12">
			<div class="btn2">&copy; Copyright</div>
			<hr/>
		</footer>
		<div class="clear"></div>

	</div>
</div>

</div>


<style>
.booba {
	font-family: 'Open Sans', sans-serif;
	font-weight: 400;
	font-size: 1em;
	color: #000;
	background-color: #f7f5f2;
}
.dn {
	display: none;
}

/* Computer */
.grid_1 { width: 6.5%; }
.grid_2 { width: 15%; }
.grid_3 { width: 23.5%; }
.grid_4 { width: 32%; }
.grid_5 { width: 40.5%; }
.grid_6 { width: 49%; }
.grid_7 { width: 57.5%; }
.grid_8 { width: 66%; }
.grid_9 { width: 74.5%; }
.grid_10 { width: 83%; }
.grid_11 { width: 91.5%; }
.grid_12 { width: 100%; }

.grid_1,
.grid_2,
.grid_3,
.grid_4,
.grid_5,
.grid_6,
.grid_7,
.grid_8,
.grid_9,
.grid_10,
.grid_11,
.grid_12 {
	margin: 0 2% 1% 0;
	float: left;
	display: block;
}

.alpha{margin-left:0;}
.omega{margin-right:0;}

.container{
	width: 90%; /*width: 1000px;*/
	max-width: 1000px;
	margin: auto;

}

.clear{clear:both;display:block;overflow:hidden;visibility:hidden;width:0;height:0}.clearfix:after{clear:both;content:' ';display:block;font-size:0;line-height:0;visibility:hidden;width:0;height:0}* html .clearfix,*:first-child+html .clearfix{zoom:1}


/* Mobile */
@media screen and (max-width : 480px) {

.grid_1,
.grid_2,
.grid_3,
.grid_4,
.grid_5,
.grid_6,
.grid_7,
.grid_8,
.grid_9,
.grid_10,
.grid_11,
.grid_12 {
	width:100%;
}

}

/* Slide 5 */
#slide5 {
	padding: 20px 0 100px 0;
	background-color: #f7f5f2;
}
.contactmap {
	background: #f48022;
	border-radius: 4px;
}
#slide5 h2 {
	margin: 13px 0 0 30px;
	color: #fff;
	font-size: 1.5em;
}
#slide5 p {
	line-height: 150%;
	color: #fff;
	padding: 5px 0 0 30px;
}
.contactype {
	position: relative;
	cursor: pointer;
	color: #fff;
	text-shadow: 0 1px 1px rgba(0,0,0,0.1);
	text-align: center;
	background-color: #c3c3c3;
	border-radius: 5px;
	height: 100px;
	float: left;
	transition: all .3s ease-in;
}
.contactype p {
	width: 100%;
	text-align: center;
	position: absolute;
	bottom: -7.5px;
	left: 0;
	padding: 0 !important;
}
.contactype:hover,.contactype.active {
	background-color: #f48022;
}
.contactype div {
	font-size: 4em;
	position: absolute;
	width: 100%;
	left: 0;
	top: 0;
	transition: all .2s ease-in;
}
.contactmap .grid_8.omega .grid_6 {
	margin: 10px 0 0 22px;
}
.contactmap .grid_8.omega .grid_6 .btn {
	margin-top: 5px;
	border: 1px solid rgba(0,0,0,.1);
	margin-left: 0;
}
.contactmap .information span {
	font-weight: bold;
}
#contact-phone .grid_6.omega {
    /* ini tuh isi dari telephone */
	font-size: 2em;
    padding-top: 40px;
}
#contact-mail .grid_6.omega {
	padding-top: 40px;
}
.btn {
	display: inline-block;
	padding-left: 56px;
	color: #626263;
	box-shadow: 0 1px 3px rgba(0,0,0,0.1);
	background-color: #fff;
	padding: 16px 24px 17px 24px;
	font-size: 13px;
	font-weight: bold;
	text-transform: uppercase;
	letter-spacing: 0.2em;
	text-shadow: none;
	line-height: 20px;
	text-align: center;
	border-radius: 5px;
	margin-left: 2.5em;
}
.btn span {
	font-size: 1em;
}
footer {
	position: relative;
	text-align: center;
	display: block;
}
footer hr {
	height: 0;
	width: 100%;
	display: block;
	position: absolute;
	background-color: #bbb;
	top: 40%;
	left: 0;
	z-index: 1;
}
.btn2 {
	color: #626263;
	background: #f7f5f2;
	border: 1px solid #bbb;
	box-shadow: 0 1px rgba(0,0,0,0);
	padding: 14px 24px;
	font-size: 13px;
	font-weight: bold;
	text-transform: uppercase;
	letter-spacing: 0.2em;
	border-radius: 5px;
	display: inline-block;
	line-height: 20px;
	text-align: center;
	position: relative;
	z-index: 2;
}
.contactmap {
	height: 300px;
	margin-bottom: 10%;
}
.contactmap .grid_8.omega {
	background-color: #fff;
	height: 100%;
	display: block;
	overflow: hidden;
	margin: 0;
	padding: 0;
}
#contact-mailClick.active div {
	left: -440px !important;
}
#contact-mailClick.active div {
	font-size: 10em;
	color: #c3c3c3;
	top: 145px;
	left: -440px;
}
</style>

<script>
//google map
var map;
  function initialize() {
    var mapOptions = {
      zoom: 13,
      center: new google.maps.LatLng(39.949910, 32.788134),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById('map_canvas'),
        mapOptions);
  }

  google.maps.event.addDomListener(window, 'load', initialize);

</script>
@endsection
