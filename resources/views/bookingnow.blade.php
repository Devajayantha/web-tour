@extends('layouts.app')
@section('bookingnow')
<div class="image-contact">
    <img src="{{asset('img/booking-now.jpg')}}" alt="image-contact" class="sampul">
</div>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <form>
            <div class="card-mb-3">
                <div class="card-header">Fill Your Imformation below</div>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" class="form-control" placeholder="Phone Number" aria-label="phone" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Paket</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option value="1">Nusa Penida</option>
                    <option value="2">Nusa Lembongan</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Daily</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option value="1">Half-Day</option>
                    <option value="2">Two Day One Night</option>
                    <option value="3">Three Day Two Night</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Person</label>
                </div>
                <select class="custom-select" id="inputGroupSelect01">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="date" class="form-control" placeholder="Depature" aria-label="phone" aria-describedby="basic-addon1">
            </div>
            <div  class="btn btn-info">SUBMIT</div>
        </form>
        </div>

        <div class="col-md-2"></div>
    </div>
</div>
@endsection

@extends('layouts.footer')