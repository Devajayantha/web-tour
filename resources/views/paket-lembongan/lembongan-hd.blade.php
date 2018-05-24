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
												@if (isset($pk->profilepic ))
													<img src="/upload/profile/{{ $pk->profilepic }}"  class="img-rating">
												@else
													<img src="http://dummyimage.com/60x60/666/ffffff&text=No+Image" class="img-rounded">
													{{-- <img src="http://poolwallet.com/assets/img/default.jpg" class="img-rounded	" alt="">   --}}
												@endif
													
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
