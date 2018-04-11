@extends('layouts.app')
@section('bookingnow')
<div class="image-contact">
    <img src="{{asset('img/booking-now.jpg')}}" alt="image-contact" class="sampul">
</div>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <form method="post" action="/booking">
            {{csrf_field()}}
            <div class="card-mb-3">
                <div class="card-header">Fill Your Information Below</div>

            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" value="{{ Auth::user()->email }}">
                <input type="hidden" name="id_user" value="{{ Auth::user()->id}}">
                <input type="hidden" name="booking_no" value="{{ rand() }}">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone"></i></span>
                </div>
                <input type="text" name="telp" class="form-control" placeholder="Phone Number" aria-label="phone" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Paket</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="id_paket">
                    <option selected>Choose...</option>
                    @foreach ($paket as $p)
                    <option value="{{$p->id}}">{{$p->name}}</option>
                   
                    @endforeach
                    
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Daily</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="id_subpaket">
                    <option selected>Choose...</option>
                    @foreach ($subpaket as $sp)
                    <option value="{{$sp->id}}">{{$sp->name}}</option>
                    @endforeach
                    
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Person</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="person">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="far fa-calendar-alt"></i></span>
                </div>
                <input type="date" class="form-control" placeholder="Departure" aria-label="phone" aria-describedby="basic-addon1" name="departure">
            </div>
            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                BOOKING NOW
            </button>  
        </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection

@extends('layouts.modal')
@extends('layouts.footer')