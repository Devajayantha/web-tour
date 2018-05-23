@extends('layouts.app')
@section ('content')
<div class="image-contact">
    <img src="{{asset('img/choose-book.jpg')}}" alt="image-contact" class="sampul">
</div>
<div class="container">
	<div class="row">
	  <div class="col-sm-4 paketpenida">
	    <div class="card">
	      <img class="card-img-top" src="{{asset('img/paket/Promo_NP_3D2N.jpg')}}"> 
	      <div class="card-body">
	        <h5 class="card-title">HALF-DAY</h5>
	        <s class="card-text">Rp 500.000/person</s>
            <p class="promo-text">Rp 400.000/person</p>
            <div class="card-header">Facilities:</div>
            <ul class="list-group list-group-flush">
			    <li class="list-group-item">Ticket Speed Boat</li>
			    <li class="list-group-item">Transport</li>
			    <li class="list-group-item">Ticket Tourist Attraction</li>
			    <li class="list-group-item">Private Tour</li>
			    <li class="list-group-item">Guide</li>
			    <li class="list-group-item">consumption</li>
			</ul>
			<br>
			<br>
			<br>
	        <a href="/nusa-penida/halfday" class="btn btn-primary">See details</a>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-4">
	    <div class="card">
	      <img class="card-img-top" src="{{asset('img/paket/Promo_NP_2D1N.jpg')}}"> 
	      <div class="card-body">
	        <h5 class="card-title">2 DAYS 1 NIGHT</h5>
			<p class="card-text">Rp 1.000.000/person</p><br>	
			<div class="card-header">Facilities:</div>
            <ul class="list-group list-group-flush">
			    <li class="list-group-item">Ticket Speed Boat</li>
			    <li class="list-group-item">Transport</li>
			    <li class="list-group-item">HomeStay</li>
			    <li class="list-group-item">Ticket Tourist Attraction</li>
			    <li class="list-group-item">Private Tour</li>
			    <li class="list-group-item">Guide</li>
			    <li class="list-group-item">Consumption</li>
			</ul>
			<br>
	        <a href="/nusa-penida/2d1n" class="btn btn-primary">See details</a>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-4">
	    <div class="card">
	      <img class="card-img-top" src="{{asset('img/paket/Promo_NP_HD.jpg')}}"> 
	      <div class="card-body">
	        <h5 class="card-title">3 DAYS 2 NIGHTS</h5>
	        <s class="card-text">Rp 3.000.000/person</s>
            <p class="promo-text">Rp 2.500.000/person</p>  
            <div class="card-header">Facilities:</div>
            <ul class="list-group list-group-flush">
			    <li class="list-group-item">Ticket Speed Boat</li>
			    <li class="list-group-item">Transport</li>
			    <li class="list-group-item">HomeStay</li>
			    <li class="list-group-item">Ticket Tourist Attraction</li>
			    <li class="list-group-item">Private Tour</li>
			    <li class="list-group-item">Guide</li>
			    <li class="list-group-item">Comsumption</li>
			</ul>   
			<br>  
	        <a href="/nusa-penida/3d2n" class="btn btn-primary">See details</a>
	      </div>
			</div>
		</div>
	</div>
</div>
{{-- @include('layouts.newfooter') --}}
@endsection