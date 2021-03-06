@extends('layouts.app')
@section ('content')
<link rel="stylesheet" href="{{asset('css/rating-viewers.css')}}">
<div class="jumbotron">
  <div class="container">
		<div class="row">
			<div class="c0l-md-5">
				<td><h1 class="display-4">Package Half Day</h1></td>
				<p class="lead">Rp 400.000/person</p>
			</div>
			<div class="col-md-5">
			</div>
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
				<li>Yellow Brigde</li>
				<li>Bakau Forest Lembongan</li>
				<li>Devil Tears</li>
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
			<li>Lunch</li>
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
		      <td>meeting pointin Sanur Harbour</td>
		    </tr>
		    <tr>
		      <th scope="row">08.00</th>
		      <td>Going to Nusa Lembongan with Speedboat</td>
		    </tr>
		    <tr>
		      <th scope="row">08.30</th>
		      <td>Arrived in nusa lembongan island</td>
		    </tr>
		    <tr>
		      <th scope="row">09.30</th>
		      <td>Arrived first spot in Mushroom Bay Beach</td>
		    </tr>
		    <tr>
		      <th scope="row">10.30</th>
		      <td>Arrived in yellow bridge</td>
		    </tr>
		    <tr>
		      <th scope="row">11.00</th>
		      <td>To have a lunch</td>
		    </tr>
		    <tr>
		      <th scope="row">12.00</th>
		      <td>Arrived in Mangrove Forest Lembongan, enjoying with boat</td>
		    </tr>
		    <tr>
		      <th scope="row">13.30</th>
		      <td>Arrived in Devil Tears</td>
				</tr>
		    <tr>
				<th scope="row">15.00</th>
				<td>Back to harbour</td>
			</tr>
		    <tr>
		      <th scope="row">15.30</th>
		      <td>Back to Sanur Beach with speedboat</td>
		    </tr>
		    <tr>
		      <th scope="row">16.30</th>
		      <td>Arrived in sanur beach</td>
		    </tr>
		  </tbody>
		</table>
		@include('layouts.slide-lembongan')
		<h2><center>The Tourist Attraction</center></h2>
		<div id="map_wrapper">
			<div id="lembongan-hd" class="mapping"></div>
		</div>
		@include('rating-paket.rating-nl-halfday')
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
			map = new google.maps.Map(document.getElementById("lembongan-hd"), mapOptions);
			map.setTilt(45);
					
			// Multiple Markers
			var markers = [
					['Mushroom Bay Beach, Nusa Penida', -8.6821941,115.4314241],
					['Yellow Bridge, Nusa Penida', -8.6941269,115.4487418],
					['Devil Tears, Nusa Penida', -8.690743,115.4271795],
					['Bakau Forest Lembongan, Nusa Penida', -8.6671404,115.465806]
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
					'<p>Position Near Atuh Beach Loc	ated in Pejukutan Village.</p>' +
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
@extends('layouts.modal-lembongan-hd')
