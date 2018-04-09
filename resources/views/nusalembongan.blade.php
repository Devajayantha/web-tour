@extends('layouts.app')
@section ('content')
<div class="image-contact">
    <img src="{{asset('img/choose-book.jpg')}}" alt="image-contact" class="sampul">
</div>
<div class="container">
	<div class="row">
	  <div class="col-sm-4">
	    <div class="card">
	      <img class="card-img-top" src="{{asset('img/paket/Promo_NL_HD.jpg')}}"> 
	      <div class="card-body">
	        <h5 class="card-title">HALF-DAY</h5>
            <p class="card-text">Rp 450.000/orang</p>
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
	        <a href="/nusa-lembongan/halfday" class="btn btn-primary">Lihat Selengkapnya</a>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-4">
	    <div class="card">
	      <img class="card-img-top" src="{{asset('img/paket/Promo_NL_2D1N.jpg')}}"> 
	      <div class="card-body">
	        <h5 class="card-title">2 DAYS 1 NIGHT</h5>
			<p class="card-text">Rp 900.000/orang</p>	
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
	        <a href="/nusa-lembongan/2d1n" class="btn btn-primary">Lihat Selengkapnya</a>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-4">
	    <div class="card">
	      <img class="card-img-top" src="{{asset('img/paket/Promo_NL_3D2N.jpg')}}"> 
	      <div class="card-body">
	        <h5 class="card-title">3 DAYS 2 NIGHTS</h5>
            <p class="card-text">Rp 2.000.000/orang</p>  
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
	        <a href="/nusa-lembongan/3d2n" class="btn btn-primary">Lihat Selengkapnya</a>
	      </div>
	    </div>
	  </div>
	</div>
	<h2><center>Location Lembongan</center></h2>
	<div id="map"></div>
	<script>
		function initMap() {
			var dps = {lat: -8.6926734, lng: 115.4510021};
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
@endsection

@extends('layouts.footer')