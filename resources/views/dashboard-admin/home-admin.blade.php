@include('layouts.app-admin-new')

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">Dashboard</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">Add Ratings</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">History Book!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-success o-hidden h-100">
                  <div class="card-body">
                    <div class="card-body-icon">
                      <i class="fa fa-fw fa-shopping-cart"></i>
                    </div>
                    <div class="mr-5">History Book!</div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href="#">
                    <span class="float-left">View Details</span>
                    <span class="float-right">
                      <i class="fa fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
      </div>
      {{--  ///////////////////////////////////////////////////  --}}
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
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
                                {{--  <!-- Button trigger modal -->  --}}
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#paymentModal{{$b->id}}">
                                    check
                                </button>
                                
                                {{--  <!-- Modal pembayaran -->  --}}
                                <div class="modal fade" id="paymentModal{{$b->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                        <div>
                                            {{$b->id}}
                                        </div>
                                        <img src="/assets/images/{{$b->payment}}" height="200px" width="200px">
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$b->id}}">
                                Val
                            </button>
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
                                    <button type="submit" class="btn btn-primary">Verifikasi</button>
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
            <a class="btn btn-primary" href="/">Back</a>
          </div>
        </div>
      </div>
    </div>