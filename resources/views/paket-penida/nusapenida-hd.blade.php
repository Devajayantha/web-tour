@extends('layouts.app')
@section ('content')
<!--/.Slides-->
<div class="jumbotron">
  <div class="container">
		<div class="row">
			<div class="c0l-md-5">
					<td><h1 class="display-4">Paket Half Day</h1></td>
					<s class="card-text">Rp 500.000/person</s>
					<p class="promo-text">Rp 400.000/person</p>
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
				<li>Broken Beach</li>
				<li>Angel Billabong</li>
				<li>Pohon Cinta (Love Tree)</li>
				<li>Crystal Bay Beach</li>
			</ul>
	</div>
</div>
<div class="panel fasilitas-tour">
	<div class="container">
		<h3>Facilities</h3>
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
		      <td>tiba di pohon cinta</td>
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
		@include('layouts.slide')
		<h2><center>The Tourist Attraction</center></h2>
		<div id="map_wrapper">
			<div id="nusapenida-hd" class="mapping"></div>
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
			map = new google.maps.Map(document.getElementById("nusapenida-hd"), mapOptions);
			map.setTilt(45);
			
					
			// Multiple Markers
			var markers = [
					['Crystal Bay Beach, Nusa Penida', -8.7153141,115.4547143],
					['Broken Beach, Nusa Penida', -8.7327633,115.449248],
					['Love Tree, Nusa Penida', -8.6824984,115.5136637]
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
					'<h3>Love Tree</h3>' +
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
@extends('layouts.modal-penida-hd')
