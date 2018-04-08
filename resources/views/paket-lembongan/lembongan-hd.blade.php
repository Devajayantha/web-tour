@extends('layouts.app')
@section ('content')
<div class="jumbotron">
  <div class="container">
		<div class="row">
			<div class="c0l-md-5">
				<td><h1 class="display-4">Paket Half Day</h1></td>
				<p class="lead">Rp 400.000/person</p>
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
				<li>Mushroom Bay Beach</li>
				<li>Yellow Brigde</li>
				<li>Bakau Forest Lembongan</li>
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
		      <td>berangkat menuju nusa lembongan dengan speed boat</td>
		    </tr>
		    <tr>
		      <th scope="row">08.30</th>
		      <td>tiba di pulau nusa lembongan</td>
		    </tr>
		    <tr>
		      <th scope="row">09.30</th>
		      <td>tiba di tempat wisata pertama Mushroom Bay Beach</td>
		    </tr>
		    <tr>
		      <th scope="row">12.00</th>
		      <td>tiba di yellow bridge</td>
		    </tr>
		    <tr>
		      <th scope="row">13.00</th>
		      <td>diantarkan ke lokasi makan siang</td>
		    </tr>
		    <tr>
		      <th scope="row">14.00</th>
		      <td>tiba di hutan bakau dan menikmati menggunakan perahu</td>
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