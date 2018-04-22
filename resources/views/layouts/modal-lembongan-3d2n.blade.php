@section('modal')
@auth
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <div class="card-container">           
                  <form method="post" action="/nusa-penida/halfday">
                    {{csrf_field()}}
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
                    </div>

                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Paket</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="id_detpaket">
                            <option selected value="6">Nusa Lembongan/3 Days 2 Nights</option>
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
                        <input type="date" class="form-control{{ $errors->has('telp') ? ' is-invalid' : '' }} " required autofocus" placeholder="Departure" aria-label="departure" aria-describedby="basic-addon1" name="departure">
                    </div>
                    <button type="submit"   class="btn btn-primary">BOOKING NOW</button>
                  </form>              
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endauth
@endsection