@extends('layouts.app')
@section ('content')
<div class="container">
	<div class="row">
	  <div class="col-sm-4">
	    <div class="card">
	    	<img class="card-img-top" src="{{asset('img/gambarpaket1.jpg')}}"> <!--gambar bisa diganti lagi-->
	      <div class="card-body">
	        <h5 class="card-title">HALF-DAY</h5>
	        <p class="card-text">Rp xxx.xxx/orang</p>
	        <div class="card-header">Fasilitas tersedia: </div>
	        <ul class="list-group list-group-flush">
			    <li class="list-group-item">Tiket</li>
			    <li class="list-group-item">Guide</li>
			    <li class="list-group-item">Private Tour</li>
			</ul>
	        <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-4">
	    <div class="card">
	    	<img class="card-img-top" src="{{asset('img/gambarpaket2.jpg')}}"> <!--gambar bisa diganti lagi-->
	      <div class="card-body">
	        <h5 class="card-title">1 DAY 1 NIGHT</h5>
	        <p class="card-text">Rp xxx.xxx/orang</p>
	        <div class="card-header">Fasilitas tersedia: </div>
	        <ul class="list-group list-group-flush">
			    <li class="list-group-item">Tiket</li>
			    <li class="list-group-item">Guide</li>
			    <li class="list-group-item">Private Tour</li>
			    <li class="list-group-item">Hotel</li>
			</ul>
	        <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-4">
	    <div class="card">
	    	<img class="card-img-top" src="{{asset('img/gambarpaket3.jpg')}}"> <!--gambar bisa diganti lagi-->
	      <div class="card-body">
	        <h5 class="card-title">3 DAYS 2 NIGHTS</h5>
	        <p class="card-text">Rp x.xxx.xxx/orang</p>
	        <div class="card-header">Fasilitas tersedia: </div>
	        <ul class="list-group list-group-flush">
			    <li class="list-group-item">Tiket</li>
			    <li class="list-group-item">Guide</li>
			    <li class="list-group-item">Private Tour</li>
			    <li class="list-group-item">Hotel</li>
			</ul>
	        <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
	      </div>
	    </div>
	  </div>
	</div>
</div>
@endsection