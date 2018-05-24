@extends('layouts.app')
@section ('content')
<div class="image-contact">
	<img src="{{asset('img/paket.jpg')}}" alt="image-contact" class="sampul">
</div>
<div class="container">
	<div class="row">
	  <div class="col-md-5 offset-md-1 col-sm-6">
	    <div class="card">
	      <img class="card-img-top" src="{{asset('img/paket/Paket_Penida.jpg')}}"> 
	      <div class="card-body">
	        <h5 class="card-title">Nusa Penida</h5>
	        <a href="/nusa-penida" class="btn btn-primary">See details</a>
	      </div>
	    </div>
	  </div>
	  <div class="col-md-5 col-sm-6">
	    <div class="card">
	      <img class="card-img-top" src="{{asset('img/paket/Paket_Lembongan.jpg')}}"> 
	      <div class="card-body">
	        <h5 class="card-title">Nusa Lembongan</h5>
	        <a href="/nusa-lembongan" class="btn btn-primary">See details</a>
	      </div>
	    </div>
	  </div>
	</div>
</div>

@endsection

