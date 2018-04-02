@extends('layouts.app')
@section ('content')
<div class="container">
	<div class="row">
	  <div class="col-sm-4 offset-md-2">
	    <div class="card">
	      <img class="card-img-top" src="{{asset('img/paket1.jpg')}}"> 
	      <div class="card-body">
	        <h5 class="card-title">Nusa Penida</h5>
	        <a href="/nusa-penida" class="btn btn-primary">Lihat Selengkapnya</a>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-4">
	    <div class="card">
	      <img class="card-img-top" src="{{asset('img/paket2.jpg')}}"> 
	      <div class="card-body">
	        <h5 class="card-title">Nusa Lembongan</h5>
	        <a href="/nusa-lembongan" class="btn btn-primary">Lihat Selengkapnya</a>
	      </div>
	    </div>
	  </div>
	</div>
</div>
@endsection

@extends('layouts.footer')