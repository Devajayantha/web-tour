@extends('layouts.app')
@section ('content')
<div class="jumbotron">
    <div class="container">
	    <div class="row">
			<div class="col-md-6">
				<td><h1 class="display-4">Package Paket 2 Days 1 Night</h1></td>
				<p class="lead">Rp 1.000.000/Person</p>
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
		<h3>Facilities</h3>
		<ul>
			<li>Ticket Speed Boat</li>
			<li>Transport</li>
			<li>Ticket Tourist Attraction</li>
			<li>Private Tour</li>
			<li>Guide</li>
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
		  </div>
		</nav>
		<div class="tab-content" id="nav-tabContent">
		  <div class="tab-pane fade show active" id="nav-hari1" role="tabpanel" aria-labelledby="nav-hari1-tab">
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">Time </th>
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
			      <td>Going to Nusa Penida with Speedboat</td>
			    </tr>
			    <tr>
			      <th scope="row">08.30</th>
			      <td>Arrived in nusa lembongan island</td>
			    </tr>
			    <tr>
			      <th scope="row">09.00</th>
			      <td>Arrived in HomeStay</td>
			    </tr>
			    <tr>
			      <th scope="row">09.30</th>
			      <td>First sport, arrived in seaweed farm</td>
			    </tr>
			    <tr>
			      <th scope="row">12.00</th>
			      <td>Arrived yellow bridge</td>
			    </tr>
			    <tr>
			      <th scope="row">13.00</th>
			      <td>Have to a lunch</td>
			    </tr>
			    <tr>
			      <th scope="row">14.30</th>
			      <td>Arrived in devil tears Point</td>
			    </tr>
			    <tr>
			      <th scope="row">16.00</th>
			      <td>Arrived in Sunset Jungut Batu</td>
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
			      <th scope="row">09.00</th>
			      <td>Going from Homestay</td>
			    </tr>
			    <tr>
			      <th scope="row">10.00</th>
			      <td>Arrived in Secret Beach</td>
			    </tr>
			    <tr>
			      <th scope="row">11.00</th>
			      <td>Snorkling in Secret Beach</td>
			    </tr>
			    <tr>
			      <th scope="row">13.00</th>
			      <td>Have a lunch</td>
			    </tr>
			    <tr>
			      <th scope="row">14.00</th>
			      <td>Arrived in Mushroom Bay Beach</td>
			    </tr>
			    <tr>
			      <th scope="row">15.00</th>
			      <td>Back to harbour</td>
			    </tr>
			    <tr>
			      <th scope="row">15.30</th>
			      <td>Back to sanur harbour using speedboat</td>
			    </tr>
			    <tr>
			      <th scope="row">16.30</th>
			      <td>Arrived in sanur beach</td>
			    </tr>
			  </tbody>
			</table>
		  </div>
		</div>
		@include('layouts.slide-lembongan')
		<h2><center>The Tourist Attraction</center></h2>
		<div id="map_wrapper">
			<div id="lembongan-2d1n" class="mapping"></div>
		</div>
		@include('rating-paket.rating-nl-2d1n')
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
			map = new google.maps.Map(document.getElementById("lembongan-2d1n"), mapOptions);
			map.setTilt(45);
					
			// Multiple Markers
			var markers = [
					['Mushroom Bay Beach, Nusa Lembongan', -8.6821941,115.4314241],
					['Yellow Bridge, Nusa Lembongan', -8.6941269,115.4487418],
					['Devil Tears, Nusa Lembongan', -8.690743,115.4271795],
					['Bakau Forest Lembongan, Nusa Lembongan', -8.6671404,115.465806],
					['Blue Lagoon, Nusa Lembongan', -8.7076739,115.4364864],
					['Secret Beach, Nusa Ceningan', -8.7079528,115.4399747],
					['Ceningan Snorkling, Nusa Ceningan', -8.6989283,115.4471067]
	
			];
													
			// Info Window Content
			var infoWindowContent = [
					['<div class="info_content">' +
					'<h3>Mushroom Bay Beach</h3>' +
					'<p> Harbour Nusa Lembongan. Located in Jungut Batu Village. That Famous Village in Lembongan.</p>' +        '</div>'],
					['<div class="info_content">' +
					'<h3>Yellow Bridge</h3>' +
					'<p>Relation Nusa Lembongan and Nusa Ceningan</p>' +
					'</div>'],
					['<div class="info_content">' +
					'<h3>Devil Tears</h3>' +
					'<p>Position Near Atuh Beach Located in Pejukutan Village.</p>' +
					'</div>'],
					['<div class="info_content">' +
					'<h3>Bakau Forest Lembongan </h3>' +
					'<p>Position Near Atuh Beach Located in Pejukutan Village.</p>' +
					'</div>'],
					['<div class="info_content">' +
					'<h3>Blue Lagoon</h3>' +
					'<p>Position Near Atuh Beach Located in Pejukutan Village.</p>' +
					'</div>'],
					['<div class="info_content">' +
					'<h3>Secret Beach</h3>' +
					'<p>Position Near Atuh Beach Located in Pejukutan Village.</p>' +
					'</div>'],
					['<div class="info_content">' +
					'<h3>Ceningan Snorkling</h3>' +
					'<p>Position Near Atuh Beach Located in Pejukutan Village.</p>' +
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
@extends('layouts.modal-lembongan-2d1n')
