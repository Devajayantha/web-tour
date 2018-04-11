@extends('layouts.app')
@section ('content')
<div class="jumbotron">
    <div class="container">
	    <div class="row">
			<div class="col-md-6">
				<td><h1 class="display-4">Paket 2 Days 1 Night</h1></td>
				<p class="lead">Rp 1.000.000/Person</p>
			</div>
			<div class="col-md-4"></div>
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
		<h3>Tujuan Tour</h3>
			<ul>
				<li>Mushroom Bay Beach</li>
				<li>Devil Tears Point</li>
				<li>Yellow Bridge</li>
				<li>Secrets Beach</li>
				<li>Blue Lagoon</li>
				<li>Seaweed farm</li>
				<li>Snorkling </li>
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
		<nav>
		  <div class="nav nav-tabs" id="nav-tab" role="tablist">
		    <a class="nav-item nav-link active" id="nav-hari1-tab" data-toggle="tab" href="#nav-hari1" role="tab" aria-controls="nav-home" aria-selected="true">Hari 1</a>
		    <a class="nav-item nav-link" id="nav-hari2-tab" data-toggle="tab" href="#nav-hari2" role="tab" aria-controls="nav-profile" aria-selected="false">Hari 2</a>
		  </div>
		</nav>
		<div class="tab-content" id="nav-tabContent">
		  <div class="tab-pane fade show active" id="nav-hari1" role="tabpanel" aria-labelledby="nav-hari1-tab">
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
			      <td>meeting point in Sanur Harbour</td>
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
			      <th scope="row">09.00</th>
			      <td>tiba di penginapan</td>
			    </tr>
			    <tr>
			      <th scope="row">09.30</th>
			      <td>tiba di spot pertama seaweed farm</td>
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
			      <th scope="row">14.30</th>
			      <td>tiba di devil tears Point</td>
			    </tr>
			    <tr>
			      <th scope="row">16.00</th>
			      <td>tiba di Sunset Jungut Batu</td>
			    </tr>
			    <tr>
			      <th scope="row">18.30</th>
			      <td>kembali ke penginapan</td>
			    </tr>
			  </tbody>
			</table>
		  </div>
		  <div class="tab-pane fade" id="nav-hari2" role="tabpanel" aria-labelledby="nav-hari2-tab">
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
			      <td>sarapan pagi</td>
			    </tr>
			    <tr>
			      <th scope="row">09.00</th>
			      <td>berangkat dari hotel</td>
			    </tr>
			    <tr>
			      <th scope="row">10.00</th>
			      <td>Tiba di Secret Beach</td>
			    </tr>
			    <tr>
			      <th scope="row">11.00</th>
			      <td>Snorkling di Secret Beach</td>
			    </tr>
			    <tr>
			      <th scope="row">13.00</th>
			      <td>diantarkan ke lokasi makan siang</td>
			    </tr>
			    <tr>
			      <th scope="row">14.00</th>
			      <td>Tiba di Mushroom Bay Beach</td>
			    </tr>
			    <tr>
			      <th scope="row">15.00</th>
			      <td>kembali ke dermaga</td>
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
		<h2><center>The Tourist Attraction</center></h2>
		<div id="map_wrapper">
			<div id="lembongan-2d1n" class="mapping"></div>
		</div>
	</div>
</div>

@endsection

@extends('layouts.footer')