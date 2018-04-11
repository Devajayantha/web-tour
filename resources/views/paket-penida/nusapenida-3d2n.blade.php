@extends('layouts.app')
@section ('content')
<div class="jumbotron">
  <div class="container">
	    <div class="row">
					<div class="col-md-6">
						<td><h1 class="display-4">Paket 3 Days 2 Nights</h1></td>
						<p class="lead"><s>Rp 3.000.000</s> Rp 2.500.000</p>
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
				<li>Atuh Beach</li>
				<li>Broken Beach</li>
				<li>Angel Billabong</li>
				<li>Kelingking Beach</li>
				<li>Teletubis Hills</li>
				<li>Tree House</li>
				<li>Tembeling Beach and Forest</li>
				<li>Paluang Cliff</li>
				<li>Crystal Bay Beach</li>
				<li>Manta Point</li>
				
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
		    <a class="nav-item nav-link" id="nav-hari3-tab" data-toggle="tab" href="#nav-hari3" role="tab" aria-controls="nav-contact" aria-selected="false">Hari 3</a>
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
			      <th scope="row">09.00</th>
			      <td>tiba di penginapan</td>
			    </tr>
			    <tr>
			      <th scope="row">09.30</th>
			      <td>tiba di spot pertama rumah pohon</td>
			    </tr>
			    <tr>
			      <th scope="row">13.00</th>
			      <td>diantarkan ke lokasi makan siang</td>
			    </tr>
			    <tr>
			      <th scope="row">14.00</th>
			      <td>tiba di atuh beach</td>
			    </tr>
			    <tr>
			      <th scope="row">15.00</th>
			      <td>tiba di tree house</td>
			    </tr>
			    <tr>
			      <th scope="row">16.00</th>
			      <td>tiba di bukit teletubis</td>
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
			      <th scope="row">08.30</th>
			      <td>berangkat dari penginapan</td>
			    </tr>
			    <tr>
			      <th scope="row">09.30</th>
			      <td>tiba di broken beach/pasih uug</td>
			    </tr>
			    <tr>
			      <th scope="row">11.00</th>
			      <td>Tiba di Angel Bilabong</td>
			    </tr>
			    <tr>
			      <th scope="row">13.00</th>
			      <td>diantarkan ke lokasi makan siang</td>
			    </tr>
			    <tr>
			      <th scope="row">14.00</th>
			      <td>tiba di kelingking beach</td>
			    </tr>
			    <tr>
			      <th scope="row">15.00</th>
			      <td>Tiba di Paluang Cliff</td>
			    </tr>
			    <tr>
			      <th scope="row">16.30</th>
			      <td>Tiba di Crystal Bay Beach</td>
			    </tr>
			    <tr>
			      <th scope="row">17.30</th>
			      <td>Kembali ke penginapan</td>
			    </tr>
			  </tbody>
			</table>
		  </div>
		  <div class="tab-pane fade" id="nav-hari3" role="tabpanel" aria-labelledby="nav-contact-tab">
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
			      <th scope="row">08.30</th>
			      <td>berangkat dari penginapan</td>
			    </tr>
			    <tr>
			      <th scope="row">09.30</th>
			      <td>snorkeling Manta Point</td>
			    </tr>
			      <th scope="row">13.00</th>
			      <td>diantarkan ke lokasi makan siang</td>
			    </tr>
			    <tr>
			      <th scope="row">14.00</th>
			      <td>Tiba di Tembeling beach and Forest</td>
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
			<div id="nusapenida-3d2n" class="mapping"></div>
		</div>
	</div>
</div>


@endsection

@extends('layouts.footer')