@extends('layouts.app')
@section ('content')

<div class="jumbotron">
    <div class="container">
	    <div class="row">
	    	<div class="col-md-6">
				<td><h1 class="display-4">Package 3 Days 2 Nights</h1></td>
				<p class="lead">Rp 2.500.000/Person</p>
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
				<li>Devil Tears Beach</li>
				<li>Yellow Bridge</li>
				<li>Secret Beach</li>
				<li>Blue Langoon</li>
				<li>Mangrove Forest</li>
				<li>Dream Beach</li>
				<li>Ceningan Cliff</li>
				<li>Goa Gala Gala</li>
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
			      <td>Going to Nusa Lembongan Island with Speedboat</td>
			    </tr>
			    <tr>
			      <th scope="row">08.30</th>
			      <td>Arrived in  nusa lembongan island</td>
			    </tr>
			    <tr>
			      <th scope="row">09.00</th>
			      <td>Arrived in Homestay</td>
			    </tr>
			    <tr>
			      <th scope="row">10.00</th>
			      <td>First spot, arrived in Mushroom Beach</td>
			    </tr>
			    <tr>
			      <th scope="row">12.00</th>
			      <td>Have a Lunch</td>
			    </tr>
			    <tr>
			      <th scope="row">14.00</th>
			      <td>Get dissert in The Deck Cafe</td>
			    </tr>
			    <tr>
			      <th scope="row">16.00</th>
			      <td>Blue Langoon Cliff Nusa Kuningan</td>
			    </tr>
			    <tr>
			      <th scope="row">18.00</th>
			      <td>Back to Homestay take a nap</td>
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
			      <td>Arrived in Yellow Brigde</td>
					</tr>
					<tr>
			      <th scope="row">10.30</th>
			      <td>Arrived in Dream Beach</td>
			    </tr>
			    <tr>
			      <th scope="row">13.00</th>
			      <td>Have a lunch in The Deck Ceningan</td>
			    </tr>
			    <tr>
			      <th scope="row">15.30</th>
			      <td>Arrived in Goa Gala Gala Lembongan</td>
			    </tr>
			    <tr>
			      <th scope="row">16.30</th>
			      <td>Back to Homestay and take a nap</td>
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
			      <td>Have a Breackfast</td>
			    </tr>
			    <tr>
			      <th scope="row">08.30</th>
			      <td>Going from homestay</td>
			    </tr>
			    <tr>
			      <th scope="row">09.30</th>
			      <td>snorkeling in dream beach
			      </td>
			    </tr>
			      <th scope="row">14.00</th>
			      <td>Have a lunch</td>
			    </tr>
			    <tr>
			      <th scope="row">15.00</th>
			      <td>Back to Harbour</td>
			    </tr>
			    <tr>
			      <th scope="row">15.30</th>
			      <td>Back to Sanur Harbour with speedboat </td>
			    </tr>
			    <tr>
			      <th scope="row">16.30</th>
			      <td>Arrive in Sanur harbour</td>
			    </tr>
			  </tbody>
			</table>
		  </div>
		</div>
		@include('layouts.slide-lembongan')
		<h2><center>The Tourist Attraction</center></h2>
		<div id="map_wrapper">
			<div id="lembongan-3d2n" class="mapping"></div>
		</div>

		{{--rating star  --}}
		<div class="row">
				<div class="col-sm-3">
					<div class="rating-block">
							<h4>Average user rating</h4>
							<h2 class="bold padding-bottom-7">{{ number_format($array['rating'], 1) }}<small>/ 5</small></h2>
							@if($array['rating'] >= 4.5)
							<span class="fas fa-star checked"></span>
							<span class="fas fa-star checked"></span>
							<span class="fas fa-star checked"></span>
							<span class="fas fa-star checked"></span>
							<span class="fas fa-star checked"></span>
						@elseif($array['rating'] >= 3.5)
							<span class="fas fa-star checked"></span>
							<span class="fas fa-star checked"></span>
							<span class="fas fa-star checked"></span>
							<span class="fas fa-star checked"></span>
						@elseif($array['rating'] >= 2.5)
							<span class="fas fa-star checked"></span>
							<span class="fas fa-star checked"></span>
							<span class="fas fa-star checked"></span>
						@elseif($array['rating']>= 1.5)
							<span class="fas fa-star checked"></span>
							<span class="fas fa-star checked"></span>
						@else
							<span class="fas fa-star checked"></span>
						@endif
		
					</div>
				</div>
				<div class="col-sm-3">
					<h4>Rating breakdown</h4>
					<div class="pull-left">
							<div class="pull-left" style="width:35px; line-height:1;">
									<div style="height:9px; margin:5px 0;">5 <span class="fas fa-star checked"></span></div>
							</div>
							<div class="pull-left" style="width:180px;">
									<div class="progress" style="height:9px; margin:8px 0;">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width:{{ $array['value_rating5'] }}%">
											<span class="sr-only">50% Complete (danger)</span>
										</div>
									</div>
							</div>
							<div class="pull-right" style="margin-left:10px;">{{ $array['stars5'] }}</div>
					</div>
					<div class="pull-left">
							<div class="pull-left" style="width:35px; line-height:1;">
									<div style="height:9px; margin:5px 0;">4 <span class="fas fa-star checked"></span></div>
							</div>
							<div class="pull-left" style="width:180px;">
									<div class="progress" style="height:9px; margin:8px 0;">
										<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width:{{ $array['value_rating4'] }}%">
											<span class="sr-only">80% Complete (danger)</span>
										</div>
									</div>
							</div>
							<div class="pull-right" style="margin-left:10px;">{{ $array['stars4'] }}</div>
					</div>
					<div class="pull-left">
							<div class="pull-left" style="width:35px; line-height:1;">
									<div style="height:9px; margin:5px 0;">3 <span class="fas fa-star checked"></span></div>
							</div>
							<div class="pull-left" style="width:180px;">
									<div class="progress" style="height:9px; margin:8px 0;">
										<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: {{ $array['value_rating3'] }}%">
											<span class="sr-only">80% Complete (danger)</span>
										</div>
									</div>
							</div>
							<div class="pull-right" style="margin-left:10px;">{{ $array['stars3'] }}</div>
					</div>
					<div class="pull-left">
							<div class="pull-left" style="width:35px; line-height:1;">
									<div style="height:9px; margin:5px 0;">2 <span class="fas fa-star checked"></span></div>
							</div>
							<div class="pull-left" style="width:180px;">
									<div class="progress" style="height:9px; margin:8px 0;">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: {{ $array['value_rating2'] }}%">
											<span class="sr-only">80% Complete (danger)</span>
										</div>
									</div>
							</div>
							<div class="pull-right" style="margin-left:10px;">{{ $array['stars2'] }}</div>
					</div>
					<div class="pull-left">
							<div class="pull-left" style="width:35px; line-height:1;">
									<div style="height:9px; margin:5px 0;">1 <span class="fas fa-star checked"></span></div>
							</div>
							<div class="pull-left" style="width:180px;">
									<div class="progress" style="height:9px; margin:8px 0;">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: {{ $array['value_rating1'] }}%">
											<span class="sr-only">80% Complete (danger)</span>
										</div>
									</div>
							</div>
							<div class="pull-right" style="margin-left:10px;">{{ $array['stars1'] }}</div>
					</div>
				</div>			
				</div>			
				<div class="row">
				<div class="col-sm-7">
					<hr/>
					@if(count($paket))
					@foreach($paket as $pk)
					<div class="review-block">
							<div class="row">
									<div class="col-sm-3">
										@if (isset( $pk->profilepic))
											<img src="/upload/profile/{{ $pk->profilepic }}"  class="img-rating">
										@else
											<img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded"> 
										@endif
											{{-- <img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded"> --}}
											<div class="review-block-date">{{date('F j \, Y',strtotime($pk->updated_at))}}<br>{{date('h:i:s A',strtotime($pk->updated_at))}}</div>
									</div>
									<div class="col-sm-9">
											<div class="review-block-rate">
												@if($pk->stars == 5)
													<span class="fas fa-star checked"></span>
													<span class="fas fa-star checked"></span>
													<span class="fas fa-star checked"></span>
													<span class="fas fa-star checked"></span>
													<span class="fas fa-star checked"></span>
												@elseif($pk->stars == 4)
													<span class="fas fa-star checked"></span>
													<span class="fas fa-star checked"></span>
													<span class="fas fa-star checked"></span>
													<span class="fas fa-star checked"></span>
												@elseif($pk->stars == 3)
													<span class="fas fa-star checked"></span>
													<span class="fas fa-star checked"></span>
													<span class="fas fa-star checked"></span>
												@elseif($pk->stars == 2)
													<span class="fas fa-star checked"></span>
													<span class="fas fa-star checked"></span>
												@elseif($pk->stars == 1)
													<span class="fas fa-star checked"></span>
												@else
												 <span>Please review our paket</span>
												@endif
											</div>
											<div class="review-block-title">{{$pk->name}}</div>
											<div class="review-block-description">{{$pk->message}}</div>
									</div>
							</div>
					</div>
					@endforeach
					@endif
				</div>
				</div>
				{{-- rating --}}

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
			map = new google.maps.Map(document.getElementById("lembongan-3d2n"), mapOptions);
			map.setTilt(45);
					
			// Multiple Markers
			var markers = [
					['Ceningan Snorkling, Nusa Ceningan', -8.6989283,115.4471067],
					['Secret Beach, Nusa Ceningan', -8.7079528,115.4399747],
					['Mushroom Bay Beach, Nusa Lembongan', -8.6821941,115.4314241],
					['Yellow Bridge, Nusa Lembongan', -8.6941269,115.4487418],
					['Devil Tears, Nusa Lembongan', -8.690743,115.4271795],
					['Bakau Forest Lembongan, Nusa Lembongan', -8.6671404,115.465806],
					['Blue Lagoon, Nusa Lembongan', -8.7076739,115.4364864]
	
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
@extends('layouts.modal-lembongan-3d2n')
