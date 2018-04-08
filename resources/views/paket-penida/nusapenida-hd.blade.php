@extends('layouts.app')
@section ('content')
<div class="jumbotron">
  <div class="container">
		<div class="row">
			<div class="c0l-md-5">
					<td><h1 class="display-4">Paket Half Day</h1></td>
					<s class="card-text">Rp 500.000/person</s>
					<p class="promo-text">Rp 400.000/person</p>
			</div>
			<div class="col-md-5">
			</div>
			<div class="col-md-2">
					<div class="btn-group btn-book">
							<a href="\booking" class="btn btn-info">
									<i class="fas fa-shopping-cart" aria-hidden="true"></i> BOOKING NOW 
							</a>
					</div>				
			</div>
		</div>
  </div>
</div>
<div class="panel tujuan-tour">
	<div class="container">
		<h3>Destination Tour</h3>
			<ul>
				<li>Broken Beach</li>
				<li>Angel Billabong</li>
				<li>Pohon Cinta (Love Tree)</li>
				<li>Crystal Bay Beach</li>
			</ul>
	</div>
</div>
<div class="panel fasilitas-tour">
	<div class="container">
		<h3>Facilitys</h3>
		<ul>
			<li>Tiket Speed Boat</li>
			<li>Akomodasi</li>
			<li>Tiket Masuk Tempat Wisata</li>
			<li>Private Tour</li>
			<li>Guide</li>
			<li>Konsumsi</li>
		</ul>
	</div>
</div>
<div class="panel itinerary">
	<div class="container">
		<h3>Itinerary</h3>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Time</th>
		      <th scope="col">Activities</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">07.30</th>
		      <td>meeting point di pelabuhan sanur</td>
		    </tr>
		    <tr>
		      <th scope="row">08.00</th>
		      <td>berangkat menuju nusa penida dengan speed boat</td>
		    </tr>
		    <tr>
		      <th scope="row">08.30</th>
		      <td>tiba di pulau nusa penida</td>
		    </tr>
		    <tr>
		      <th scope="row">09.30</th>
		      <td>tiba di spot pertama broken beach and angels billabong</td>
		    </tr>
		    <tr>
		      <th scope="row">12.00</th>
		      <td>tiba di pohon cinta</td>
		    </tr>
		    <tr>
		      <th scope="row">13.00</th>
		      <td>diantarkan ke lokasi makan siang</td>
		    </tr>
		    <tr>
		      <th scope="row">14.00</th>
		      <td>tiba di crystal bay dan menikmati hamparan pasir putih</td>
		    </tr>
		    <tr>
		      <th scope="row">15.00</th>
		      <td> kembali ke dermaga</td>
		    </tr>
		    <tr>
		      <th scope="row">15.30</th>
		      <td>kembali ke pantai sanur menggunakan speed boat</td>
		    </tr>
		    <tr>
		      <th scope="row">16.30</th>
		      <td>tiba di pantai sanur</td>
		    </tr>
		  </tbody>
		</table>
		<h2><center>Location Nusa Penida</center></h2>
		<div id="map"></div>
		<script>
					function initMap() {
						var dps = {lat: -8.732204, lng: 115.450929};
						var map = new google.maps.Map(document.getElementById('map'), {
							zoom: 15,
							center: dps
						});
						var marker = new google.maps.Marker({
							position: dps,
							map: map
						});
					}

				</script>
				<script async defer
				src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7MbYys7PWpzyY9xQcwlW88styrWjH-JM&callback=initMap">
		</script>
	</div>
</div>


@endsection

@extends('layouts.footer')