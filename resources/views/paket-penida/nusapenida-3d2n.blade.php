@extends('layouts.app')
@section ('content')
<div class="jumbotron">
  <div class="container">
	    <div class="row">
					<div class="col-md-6">
						<td><h1 class="display-4">Package 3 Days 2 Nights</h1></td>
						<p class="lead"><s>Rp 3.000.000</s> Rp 2.500.000</p>
					</div>
					<div class="col-md-4"></div>
					<div class="col-md-2">
						@auth
							<div class="btn-group btn-book">
								<a  data-toggle="modal" data-target="#formModal" class="btn btn-info">
									<i class="fas fa-shopping-cart" aria-hidden="true"></i> BOOKING NOW 
								</a>						
							</div>
							@else
							<div class="btn-group btn-book">
								<a  href="{{ route('login') }}" class="btn btn-info">
									<i class="fas fa-shopping-cart" aria-hidden="true"></i> BOOKING NOW 
								</a>
							</div>			
						@endauth				
					</div>
				</div>
  </div>
</div>
<div class="panel tujuan-tour">
	<div class="container">
		<h3>Destination Tour</h3>
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
		<h3>Facilities</h3>
		<ul>
			<li>Ticket Speed Boat</li>
			<li>Transport</li>
			<li>Ticket Tourist Attraction</li>
			<li>Private Tour</li>
			<li>Guide</li>
			<li>HomeStay</li>
			<li>Consume</li>
		</ul>
	</div>
</div>
<div class="panel itinerary">
	<div class="container">
		<h3>Itinerary</h3>
		<nav>
		  <div class="nav nav-tabs" id="nav-tab" role="tablist">
		    <a class="nav-item nav-link active" id="nav-hari1-tab" data-toggle="tab" href="#nav-hari1" role="tab" aria-controls="nav-home" aria-selected="true">Day 1</a>
		    <a class="nav-item nav-link" id="nav-hari2-tab" data-toggle="tab" href="#nav-hari2" role="tab" aria-controls="nav-profile" aria-selected="false">Day 2</a>
		    <a class="nav-item nav-link" id="nav-hari3-tab" data-toggle="tab" href="#nav-hari3" role="tab" aria-controls="nav-contact" aria-selected="false">Day 3</a>
		  </div>
		</nav>
		<div class="tab-content" id="nav-tabContent">
		  <div class="tab-pane fade show active" id="nav-hari1" role="tabpanel" aria-labelledby="nav-hari1-tab">
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
			      <td>meeting point in Sanur Harbour</td>
			    </tr>
			    <tr>
			      <th scope="row">08.00</th>
			      <td>Going to Nusa Penida Island with Speedboat</td>
			    </tr>
			    <tr>
			      <th scope="row">08.30</th>
			      <td>Arrived in Nusa Penida</td>
			    </tr>
			    <tr>
			      <th scope="row">09.00</th>
			      <td>Arrived in HomeStay</td>
			    </tr>
			    <tr>
			      <th scope="row">09.30</th>
			      <td>First spot in Crystal Bay Beach</td>
			    </tr>
			    <tr>
			      <th scope="row">13.00</th>
			      <td>To Have a lunch</td>
			    </tr>
			    <tr>
			      <th scope="row">14.00</th>
			      <td>Arrived in atuh beach</td>
			    </tr>
			    <tr>
			      <th scope="row">15.00</th>
			      <td>Arrived in tree house</td>
			    </tr>
			    <tr>
			      <th scope="row">16.00</th>
			      <td>Arrived in teletubis hills</td>
			    </tr>
			    <tr>
			      <th scope="row">18.30</th>
			      <td>Back to HomeStay</td>
			    </tr>
			  </tbody>
			</table>
		  </div>
		  <div class="tab-pane fade" id="nav-hari2" role="tabpanel" aria-labelledby="nav-hari2-tab">
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
			      <td>Have a breakfast</td>
			    </tr>
			    <tr>
			      <th scope="row">08.30</th>
			      <td>Going from homestay</td>
			    </tr>
			    <tr>
			      <th scope="row">09.30</th>
			      <td>Arrived in pasih uug/ broken beach</td>
			    </tr>
			    <tr>
			      <th scope="row">11.00</th>
			      <td>Arrived in angel bilabong</td>
			    </tr>
			    <tr>
			      <th scope="row">13.00</th>
			      <td>Have a lunch</td>
			    </tr>
			    <tr>
			      <th scope="row">14.00</th>
			      <td>Arrived in Kelingking Beach</td>
			    </tr>
			    <tr>
			      <th scope="row">15.00</th>
			      <td>Arrived in Paluang Cliff</td>
			    </tr>
			    <tr>
			      <th scope="row">16.30</th>
			      <td>Arrived in Crystal Bay Beach</td>
			    </tr>
			    <tr>
			      <th scope="row">17.30</th>
			      <td>Back to homestay take a nap</td>
			    </tr>
			  </tbody>
			</table>
		  </div>
		  <div class="tab-pane fade" id="nav-hari3" role="tabpanel" aria-labelledby="nav-contact-tab">
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
			      <td>Have a breakfast</td>
			    </tr>
			    <tr>
			      <th scope="row">08.30</th>
			      <td>Going from homestay</td>
			    </tr>
			    <tr>
			      <th scope="row">09.30</th>
			      <td>snorkeling Manta Point</td>
			    </tr>
			      <th scope="row">13.00</th>
			      <td>Have a lunch</td>
			    </tr>
			    <tr>
			      <th scope="row">14.00</th>
			      <td>Arrived in Tembeling</td>
			    </tr>
			    <tr>
			      <th scope="row">15.30</th>
			      <td>Back to Sanur Harbour using speedboat</td>
			    </tr>
			    <tr>
			      <th scope="row">16.30</th>
			      <td>Arrived in sanur harbour</td>
			    </tr>
			  </tbody>
			</table>
		  </div>
		</div>
		@include('layouts.slide')
		<h2><center>The Tourist Attraction</center></h2>
		<div id="map_wrapper">
			<div id="nusapenida-3d2n" class="mapping"></div>
		</div>
		@include('rating-paket.rating-np-3d2n')
	</div>
</div>
<script>
		function initialize() {
			var map;
			var bounds = new google.maps.LatLngBounds();
			var mapOptions = {
					mapTypeId: 'roadmap'
			};
											
			// Display a map on the page
			map = new google.maps.Map(document.getElementById("nusapenida-3d2n"), mapOptions);
			map.setTilt(45);
					
			// Multiple Markers
			var markers = [
					['Crystal Bay Beach, Nusa Penida', -8.7153141,115.4547143],
					['Broken Beach, Nusa Penida', -8.7327633,115.449248],
					['Atuh Beach, Nusa Penida', -8.7734116,115.61963],
					['Tree House, Nusa Penida', -8.7785426,115.6146517],
					['Teletubis Hills, Nusa Penida', -8.776585,115.5790007],
					['Kelingking Beach, Nusa Penida', -8.7527242,115.4697092],
					['Tembeling Beach & Forest, Nusa Penida', -8.7706991,115.4947669],
					['Manta Point, Nusa Penida', -8.7934523,115.5248699],
					['Paluang Cliff, Nusa Penida', -8.7527041,115.4740152]
			];
													
			// Info Window Content
			var infoWindowContent = [
					['<div class="info_content">' +
					'<h3>Crystal Bay Beach</h3>' +
					'<p>Position Near Pakeh Harbour. Located in Penida Village</p>' +        '</div>'],
					['<div class="info_content">' +
					'<h3>Broken Beach</h3>' +
					'<p>Position Near Angel Billabong. Located in Mekartaji Village .</p>' +
					'</div>'],
					['<div class="info_content">' +
					'<h3>Atuh Beach </h3>' +
					'<p>Position Near Tree House. Located in Pejukutan Village .</p>' +
					'</div>'],
					['<div class="info_content">' +
					'<h3>Tree House </h3>' +
					'<p>Position Near Atuh Beach. Located in Pejukutan Village.</p>' +
					'</div>'],
					['<div class="info_content">' +
					'<h3>Teletubis Hills</h3>' +
					'<p>Located in Tanglad Village.</p>' +
					'</div>'],
					['<div class="info_content">' +
					'<h3>Kelingking Beach</h3>' +
					'<p>Located in Dawan Village.</p>' +
					'</div>'],
					['<div class="info_content">' +
					'<h3>Tembeling Beach & Forest</h3>' +
					'<p>Located in Batumadeg Village.</p>' +
					'</div>'],
					['<div class="info_content">' +
					'<h3>Manta Point</h3>' +
					'<p>Snorkling with Manta fish & Mola Mola. Located in Batumadeg.</p>' +
					'</div>'],
					['<div class="info_content">' +
					'<h3>Paluang Cliff</h3>' +
					'<p>Poisition in Dawan Village near Kelingking Beach</p>' +
					'</div>']
			];
					
			// Display multiple markers on a map
			var infoWindow = new google.maps.InfoWindow(), marker, i;
			
			// Loop through our array of markers & place each one on the map  
			for( i = 0; i < markers.length; i++ ) {
					var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
					bounds.extend(position);
					marker = new google.maps.Marker({
							position: position,
							map: map,
							title: markers[i][0]
					});
					
					// Allow each marker to have an info window    
					google.maps.event.addListener(marker, 'click', (function(marker, i) {
							return function() {
									infoWindow.setContent(infoWindowContent[i][0]);
									infoWindow.open(map, marker);
							}
					})(marker, i));
	
					// Automatically center the map fitting all markers on the screen
					map.fitBounds(bounds);
			}
	
			// Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
			var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
					this.setZoom(14);
					google.maps.event.removeListener(boundsListener);
			});
			
	}
</script>
{{-- @include('layouts.newfooter') --}}
@endsection
@extends('layouts.modal-penida-3d2n')
