@extends('layouts.app')
@section ('content')
<div class="jumbotron">
  <div class="container">
    <h1 class="display-4">Paket Half Day</h1>
    <p class="lead"><s>Rp 500.000</s> Rp 400.000</p>
  </div>
</div>
<div class="panel tujuan-tour">
	<div class="container">
		<h3>Tujuan Tour</h3>
			<ul>
				<li>Broken Beach</li>
				<li>Angel Billabong</li>
				<li>Kelingking Beach</li>
				<li>Pohon Cinta (Love Tree)</li>
				<li>Crystal Bay Beach</li>
			</ul>
	</div>
</div>
<div class="panel fasilitas-tour">
	<div class="container">
		<h3>Fasilitas</h3>
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
		      <th scope="col">Jam</th>
		      <th scope="col">Kegiatan</th>
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
		      <td>tiba di pohon cinta dan kelingking beach</td>
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
	</div>
</div>


@endsection

@extends('layouts.footer')