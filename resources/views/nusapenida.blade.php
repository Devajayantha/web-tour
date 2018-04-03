@extends('layouts.app')
@section ('content')
<div class="container">
	<div class="row">
		<h2><center>Location Nusa Penida</center></h2>
		<div id="map"></div>
		<script>
					function initMap() {
						var dps = {lat: -8.674623, lng: 115.546488};
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
	  <div class="col-sm-4 paketpenida">
	    <div class="card">
	      <img class="card-img-top" src="{{asset('img/tour1.jpg')}}"> 
	      <div class="card-body">
	        <h5 class="card-title">HALF-DAY</h5>
	        <s class="card-text">Rp 500.000/orang</s>
            <p class="promo-text">Rp 400.000/orang</p>
            <div class="card-header">Fasilitas:</div>
            <ul class="list-group list-group-flush">
			    <li class="list-group-item">Tiket Speed Boat</li>
			    <li class="list-group-item">Akomodasi</li>
			    <li class="list-group-item">Tiket Masuk Tempat Wisata</li>
			    <li class="list-group-item">Private Tour</li>
			    <li class="list-group-item">Guide</li>
			    <li class="list-group-item">Konsumsi</li>
			</ul>
			<br>
			<br>
			<br>
	        <a href="/paket-half-day" class="btn btn-primary">Lihat Selengkapnya</a>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-4">
	    <div class="card">
	      <img class="card-img-top" src="{{asset('img/tour2.jpg')}}"> 
	      <div class="card-body">
	        <h5 class="card-title">2 DAYS 1 NIGHT</h5>
			<p class="card-text">Rp 1.000.000/orang</p><br>	
			<div class="card-header">Fasilitas:</div>
            <ul class="list-group list-group-flush">
			    <li class="list-group-item">Tiket Speed Boat</li>
			    <li class="list-group-item">Akomodasi</li>
			    <li class="list-group-item">Hotel</li>
			    <li class="list-group-item">Tiket Masuk Tempat Wisata</li>
			    <li class="list-group-item">Private Tour</li>
			    <li class="list-group-item">Guide</li>
			    <li class="list-group-item">Konsumsi</li>
			</ul>
			<br>
	        <a href="/paket-2-days-1-night" class="btn btn-primary">Lihat Selengkapnya</a>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-4">
	    <div class="card">
	      <img class="card-img-top" src="{{asset('img/tour3.jpg')}}"> 
	      <div class="card-body">
	        <h5 class="card-title">3 DAYS 2 NIGHTS</h5>
	        <s class="card-text">Rp 3.000.000/orang</s>
            <p class="promo-text">Rp 2.500.000/orang</p>  
            <div class="card-header">Fasilitas:</div>
            <ul class="list-group list-group-flush">
			    <li class="list-group-item">Tiket Speed Boat</li>
			    <li class="list-group-item">Akomodasi</li>
			    <li class="list-group-item">Hotel</li>
			    <li class="list-group-item">Tiket Masuk Tempat Wisata</li>
			    <li class="list-group-item">Private Tour</li>
			    <li class="list-group-item">Guide</li>
			    <li class="list-group-item">Konsumsi</li>
			</ul>   
			<br>  
	        <a href="/paket-3-days-2-nights" class="btn btn-primary">Lihat Selengkapnya</a>
	      </div>
			</div>
		</div>
	</div>
</div>
@endsection

@extends('layouts.footer')