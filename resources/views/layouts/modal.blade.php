@section('modal')
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <div class="card-container">
                <div class="amount">
                    <div class="amount-title pull-left">
                        <span class="text-amount-title">Amount</span>
                    </div>
                    <div class="amount-content pull-right">
                        <span class="text-amount-rp">Rp</span>
                        <span class="text-amount-amount">400,000</span>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalBank">Next</button>
      </div>
    </div>
  </div>
</div>
@endsection