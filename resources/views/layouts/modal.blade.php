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
              <div class="card-container">
                <div class="row">
                  <div class="col-sm-6">
                    <h5 class="card-title">Name</h5>
                    <p class="card-text">{{ Auth::user()->name }}</p>
                    <h5 class="card-title">Email</h5>
                    <p class="card-text">{{ Auth::user()->email }}</p>
                    <h5 class="card-title">Package</h5>
                    <p class="card-text">Nusa Penida</p>
                  </div>
                  <div class="col-sm-6">
                    <h5 class="card-title">Day</h5>
                    <p class="card-text">Half Day</p>
                    <h5 class="card-title">Person</h5>
                    <p class="card-text">1</p>
                    <h5 class="card-title">Date</h5>
                    <p class="card-text">11/04/2018</p>
                  </div>
              </div>                
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPayment" data-dismiss="modal">Next</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalPayment" tabindex="-1" role="dialog" aria-labelledby="modalPaymentLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalPaymentLabel">Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <div class="card-container">
              <div class="content-list" id="payment-list">
                <div>
                  <a class="list" href="#modalBank" data-toggle="modal" data-target="#modalBank" data-dismiss="modal">
                    <div class="list-payment-logo">
                      <i class="fas fa-credit-card"></i> 
                    </div>
                    <div class="list-content">
                      <div class="list-title text-actionable-bold">ATM</div>
                      <div class="list-caption text-actionable-caption">Bayar dari ATM Bank</div>
                    </div>
                    <div class="list-next">
                      <i class="fas fa-chevron-right"></i>
                    </div>
                  </a>
                </div>
                
                
              </div>
            </div>
            
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary mr-auto" data-toggle="modal" data-target="#exampleModal" data-dismiss="modal">Previous</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalBank" tabindex="-1" role="dialog" aria-labelledby="modalBankLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalBankLabel">Bank</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <div class="card-container">
              <div class="content-list" id="payment-list">
                <div>
                  <a class="list" href="#BCAModal" data-toggle="modal" data-target="#BCAModal" data-dismiss="modal">
                    <div class="list-payment-logo">
                      <i class="fas fa-credit-card"></i>
                    </div>
                    <div class="list-content">
                      <div class="list-title text-actionable-bold">BCA</div>
                      <div class="list-caption text-actionable-caption">Bayar dengan Kartu BCA</div>
                    </div>
                    <div class="list-next">
                      <i class="fas fa-chevron-right"></i>
                    </div>
                  </a>
                </div>
                
                <div>
                  <a class="list" href="#/bank-transfer">
                    <div class="list-payment-logo">
                        <i class="fas fa-credit-card"></i>                      
                    </div>
                    <div class="list-content">
                      <div class="list-title text-actionable-bold">Bank Lainnya</div>
                      <div class="list-caption text-actionable-caption">Bayar dari ATM Bersama</div>
                    </div>
                    <div class="list-next">
                      <i class="fas fa-chevron-right"></i>
                    </div>
                  </a>
                </div>
                
              </div>
            </div>
            
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary mr-auto" data-toggle="modal" data-target="#modalPayment" data-dismiss="modal">Previous</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="BCAModal" tabindex="-1" role="dialog" aria-labelledby="BCAModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="BCAModalLabel">BCA</h5>
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
              <div class="card-container">
                <div class="card-title">Nomor Rekening</div>
                <span class="text-no-rek">123456789</span>
              </div>
              <div class="card-container">
                <div class="card-title">Cara Pembayaran</div>
                <p class="card-text">....</p>
              </div>                
          </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary mr-auto" data-toggle="modal" data-target="#modalBank" data-dismiss="modal">Previous</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#" data-dismiss="modal">Next</button>
      </div>
    </div>
  </div>
</div>




@endsection