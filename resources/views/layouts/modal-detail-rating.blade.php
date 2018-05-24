<div class="modal fade" id="detailReview" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Review Rating</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
              <label for="name">Name user</label>
              <input type="text" class="form-control" id="nameuser" value="{{$r->name}}">
            </div>
            <div class="form-group">
              <label for="name">Paket Booking</label>
              <input type="text" class="form-control" id="nameuser" value="{{$r->paket}}/{{$r->subpaket}}">
            </div>
            <div class="form-group">
              <label for="name">Date Input</label>
              <input type="text" class="form-control" id="day" value="{{date('l \, jS \of F Y h:i:s A',strtotime($r->updated_at))}}">
            </div>
            <div class="form-group">
                <label for="name">Date Paket</label>
                <input type="text" class="form-control" id="day" value="{{date('l \, jS \of F Y',strtotime($r->departure))}}">
              </div>                                                                         
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
  </div>