@extends('layouts.app')
@section ('content')
<div class="image-contact">
    <img src="{{asset('img/choose-book.jpg')}}" alt="image-contact" class="sampul">
</div>
<div class="container">
	<div class="row">
	  <div class="col-sm-4">
	    <div class="card">
	      <img class="card-img-top" src="{{asset('img/paket/Promo_NL_HD.jpg')}}"> 
	      <div class="card-body">
	        <h5 class="card-title">HALF-DAY</h5>
            <p class="card-text">Rp 450.000/person</p>
            <div class="card-header">Facilities:</div>
            <ul class="list-group list-group-flush">
			    <li class="list-group-item">Ticket Speed Boat</li>
			    <li class="list-group-item">Transport</li>
			    <li class="list-group-item">Ticket Tourist Attraction</li>
			    <li class="list-group-item">Private Tour</li>
			    <li class="list-group-item">Guide</li>
			    <li class="list-group-item">Consume</li>
			</ul>
			<br>
			<br>
			<br>
	        <a href="/nusa-lembongan/halfday" class="btn btn-primary">See details</a>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-4">
	    <div class="card">
	      <img class="card-img-top" src="{{asset('img/paket/Promo_NL_2D1N.jpg')}}"> 
	      <div class="card-body">
	        <h5 class="card-title">2 DAYS 1 NIGHT</h5>
			<p class="card-text">Rp 900.000/person</p>	
			<div class="card-header">Facilities:</div>
            <ul class="list-group list-group-flush">
			    <li class="list-group-item">Ticket Speed Boat</li>
			    <li class="list-group-item">Transport</li>
			    <li class="list-group-item">Homestay</li>
			    <li class="list-group-item">Ticket Tourist Attraction</li>
			    <li class="list-group-item">Private Tour</li>
			    <li class="list-group-item">Guide</li>
			    <li class="list-group-item">Consume</li>
			</ul>
			<br>
	        <a href="/nusa-lembongan/2d1n" class="btn btn-primary">See details</a>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-4">
	    <div class="card">
	      <img class="card-img-top" src="{{asset('img/paket/Promo_NL_3D2N.jpg')}}"> 
	      <div class="card-body">
	        <h5 class="card-title">3 DAYS 2 NIGHTS</h5>
            <p class="card-text">Rp 2.000.000/person</p>  
            <div class="card-header">Facilities:</div>
            <ul class="list-group list-group-flush">
			    <li class="list-group-item">Ticket Speed Boat</li>
			    <li class="list-group-item">Transport</li>
			    <li class="list-group-item">Homestay</li>
			    <li class="list-group-item">Ticket Tourist Attraction</li>
			    <li class="list-group-item">Private Tour</li>
			    <li class="list-group-item">Guide</li>
			    <li class="list-group-item">Consume</li>
			</ul>   
			<br>
	        <a href="/nusa-lembongan/3d2n" class="btn btn-primary">See details</a>
	      </div>
	    </div>
	  </div>
	</div>
</div>
{{-- @include('layouts.newfooter') --}}
@endsection

