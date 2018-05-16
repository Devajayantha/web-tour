@include('layouts.app-admin-new')

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Booking List</li>
      </ol>
      @if (isset($warning))
      <div class="alert alert-warning alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $warning }}</strong>
      </div>
      @endif
       @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
      </div>
      @endif
      {{--  ///////////////////////////////////////////////////  --}}
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Table Booking</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr class="table-success">
                    <th scope="col">No</th>
                    <th scope="col">ID</th>
                    <th scope="col">Paket</th>
                    <th scope="col">Sub</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Depature</th>
                    <th scope="col">Total</th>
                    <th scope="col">Status</th>
                    <th scope="col">Payment</th>
                    <th scope="col">Validasi</th>
                    </tr>
                </thead>
                <tbody>
                @if(count($booking))
                    @foreach($booking as $b)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$b->booking_no}}</td>
                            <td>{{$b->paket}}</td>
                            <td>{{$b->subpaket}}</td>
                            <td>{{$b->person}}</td>
                            <td>{{$b->departure}}</td>
                            <td>{{$b->amount}}</td>
                            <td>
                            {{--  @if($b->confirmation == 0)
                                {{'Belum Bayar'}}
                            @else
                                {{'Sudah Bayar'}}
                            @endif  --}}
                            @if($b->confirmation == 0 && is_null($b->payment))
                                {{'Belum Bayar'}}
                            @elseif ($b->confirmation == 0 && $b->payment !== '')
                                {{'Menunggu'}}
                            @else
                                {{'Berhasil'}}
                            @endif
                            </td>
                            <td>
                                {{--  <i class="far fa-eye" data-toggle="modal" data-target="#paymentModal{{$b->id}}"></i>  --}}
                                <a href="#" class="btn btn-success btn-lg" data-toggle="modal" data-target="#paymentModal{{$b->id}}">
                                    <span class="fas fa-eye"></span>
                                </a>
                                <div class="modal fade" id="paymentModal{{$b->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Check Detail Payment</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body mx-3">
                                        <div class="form-group form-inline">
                                            <label for="text">Nama : &nbsp; </label>
                                            <input type="text" class="form-control" id="name" value="{{$b->name}}" disabled>
                                        </div>      
                                        @if (is_null($b->payment)) 
                                            {{'User Belum Melakukan Upload Bukti Bayar'}}
                                        @else                         
                                            <img src="/assets/images/{{$b->payment}}" width="85%;" class="fotobayar">
                                        @endif
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Ok</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                @if ($b->confirmation == 0)                                
                                <a href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#exampleModal{{$b->id}}">
                                    <span class="far fa-calendar-check"></span>
                                </a>
                                @else
                                 <a href="#" class="btn btn-info btn-lg disabled" data-toggle="modal" data-target="#exampleModal{{$b->id}}">
                                    <span class="far fa-calendar-check"></span>
                                </a>
                                @endif

                            {{--  <!-- Modal verifikasi -->  --}}
                            <div class="modal fade" id="exampleModal{{$b->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Verifikasi Pembayaran</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="/admin/updatepayment/{{$b->id}}" method="POST">
                                @csrf
                                {{method_field('put')}}
                                <div class="modal-body">
                                    Apakah anda yakin untuk melakukan verifikasi ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-primary adm-ver">Verifikasi</button>
                                </div>
                                </form>
                                </div>
                            </div>
                            </div>
                            </td>
                        </tr>
                      @endforeach
                @endif
                </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="{{route('admin.logout')}}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </div>
        </div>
      </div>
    </div>