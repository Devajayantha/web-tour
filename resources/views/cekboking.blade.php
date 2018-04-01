@extends('layouts.app')


@section('cekboking')
<div class="image-contact">
    <img src="{{asset('img/check-booking.jpg')}}" alt="image-contact" class="sampul">
</div>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 col-sm-12">
            <div class="card card-booking ">
                <div class="card-body">
                    <form action="" class="form-cek ">
                        <div class="row">
                            <div class="input-group mb-3 col-md-6 col-sm-5">
                                <div class="input-group-prepend">
                                    <span class="input-group-text fas fa-id-card" id="basic-addon1"></span>
                                </div>
                                <input type="text" class="form-control" placeholder="#ID Booking" aria-label="Username" aria-describedby="basic-addon1">   
                            </div>
                            <div class="input-group mb-3 col-md-6 col-sm-5">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text far fa-envelope" id="basic-addon1"></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Email booking" aria-label="Username" aria-describedby="basic-addon1">   
                                </div>
                            {{--  <div class="col-md-4 col-sm-3">
                                
                            </div>  --}}
                        </div>
                        <div class="row">
                                <div class="input-group mb-3 col-md-6 col-sm-5">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text far fa-calendar-alt" id="basic-addon1"></span>
                                        </div>
                                        <input type="date" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>          
                                </div>
                                <div class="input-group mb-3 col-md-2 col-sm-5">
                                </div>
                                <div class="col-md-4 col-sm-3">
                                    <button type="button" class="btn btn-info btn-block">Search</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>    
    <div class="col-md-2"></div>  
    </div>
</div>


@endsection

@extends('layouts.footer')