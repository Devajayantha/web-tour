@extends('layouts.app')
@section ('content')
<div class="container">
	<div class="row">
	  <div class="col-sm-4">
	    <div class="card">
	      <img class="card-img-top" src="{{asset('img/tour1.jpg')}}"> <!--gambar bisa diganti lagi-->
	      <div class="card-body">
	        <h5 class="card-title">HALF-DAY</h5>
	        <s class="card-text">Rp 500.000/orang</s>
            <p class="promo-text">Rp 400.000/orang</p>
	        <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-4">
	    <div class="card">
	      <img class="card-img-top" src="{{asset('img/tour2.jpg')}}"> <!--gambar bisa diganti lagi-->
	      <div class="card-body">
	        <h5 class="card-title">2 DAYS 1 NIGHT</h5>
					<p class="card-text">Rp 1.000.000/orang</p>	<br>
	        <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-4">
	    <div class="card">
	    	<img class="card-img-top" src="{{asset('img/tour3.jpg')}}"> <!--gambar bisa diganti lagi-->
	      <div class="card-body">
	        <h5 class="card-title">3 DAYS 2 NIGHTS</h5>
	        <s class="card-text">Rp 3.000.000/orang</s>
            <p class="promo-text">Rp 2.500.000/orang</p>       
	        <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
	      </div>
	    </div>
	  </div>
	</div>
</div>
@endsection

@extends('layouts.footer')