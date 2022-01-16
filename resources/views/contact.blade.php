@extends('layouts.masters')


@section('content')
<div class="booba">
    <br>
    <br>
        <h3 style="text-align: center"><b>Contact Us</b></h3>
    <br>
<div>
	<div class="container" id="slide5">
		<div class="content grid_12 contactmap" id="contact-phone">
			<div class="grid_4">
				<h2>TELEPHONE</h2>
				<p class="information"><span class="icon-location">Have questions?</span>Feel free to ask our staff directly!</p>
			</div>
			<div class="grid_8 omega">
                <div class="grid_6 omega" style="font-size: 2em; padding-top: 40px;">+62 812 6969 6907</div>
			</div>
		</div>

		<div class="content grid_12 contactmap dn" id="contact-mail">
			<div class="grid_4">
				<h2>E-MAIL</h2>
				<p class="information"><span class="icon-location">Have a question that cannot be asked in person? E-mail us!</p>
			</div>
			<div class="grid_8 omega">
				<div class="grid_6 omega" style="padding-top: 40px"><a href="mailto:mail@loremipsum.com?Subject=Hello" class="btn">furnishsetable@gmail.com</a></div>
			</div>
		</div>

        <div class="content grid_12 contactmap" id="contact-map">
			<div class="grid_4">
				<h2>CONTACT</h2>
				<p class="information"><span class="icon-location"> Not familiar with our simple map?<br> Get direction to our closess head office!</span></p>
				<a class="btn" href="https://goo.gl/maps/8GlbZ" target="_blank" style="padding-left:100px">Get Direction</a>
				<div class="clear"></div>
			</div>
			<div class="grid_8 omega">
				<div id="map_canvas"></div>
			</div>
		</div>

		<div class="clear"></div>

		<footer class="">
			<div class="btn2">&copy; Furnishsetable</div>
			<hr/>
		</footer>
		<div class="clear"></div>

	</div>
</div>

</div>

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
