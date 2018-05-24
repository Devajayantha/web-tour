  {{--  <!-- Modal Validasi rating -->  --}}
  <div class="modal fade" id="validasiConfirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Verifikasi review rating</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
      <form action="{{url('/admin/update/valid')}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('put')}}
        <div class="modal-body">
          <input type="hidden" name="id" id="id">
          <input type="hidden" name="confirm_rating" id="confirm_rating" >
            Apakah anda yakin untuk melakukan verifikasi 
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary adm-ver">Verifikasi</button>
        </div>
        </form>
        </div>
    </div>
  </div>
  {{--  end modal  --}}