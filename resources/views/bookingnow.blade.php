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
                <input type="text" name="telp" class="form-control{{ $errors->has('telp') ? ' is-invalid' : '' }} " required autofocus" placeholder="Phone Number" aria-label="phone" aria-describedby="basic-addon1">
                @if ($errors->has('telp'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('telp') }}</strong>
                    </span>
                @endif
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Paket</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01" name="id_detpaket">
                    <option selected>Choose...</option>
                    @foreach ($detpaket as $dp)
                    <option value="{{$dp->id}}">{{$dp->paket->name}} / {{$dp->subpaket->name}}</option>
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
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="far fa-calendar-alt"></i></span>
                </div>
                <input type="date" class="form-control{{ $errors->has('telp') ? ' is-invalid' : '' }} " required autofocus" placeholder="Departure" aria-label="phone" aria-describedby="basic-addon1" name="departure">
                @if ($errors->has('departure'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('departure') }}</strong>
                    </span>
                @endif
            </div>


            <button type="submit"  class="btn btn-primary">
                BOOKING NOW
            </button>  
        </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
{{-- @include('layouts.newfooter') --}}
@endsection

