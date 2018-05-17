@include('layouts.app-user-new')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">History Book!</li>
      </ol>
  
      @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
      </div>
      @endif
      @if ($message = Session::get('info'))
      <div class="alert alert-info alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
      </div>
      @endif
      @if ($message = Session::get('error'))
      <div class="alert alert-danger alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
      </div>
      @endif

      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data History</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID Booking</th>
                            <th scope="col">Paket</th>
                            <th scope="col">Subpaket</th>
                            <th scope="col">Qty</th>
                            <th scope="col">Depature</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Status</th>
                            <th scope="col">Payment</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($booking as $b)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$b->booking_no}}</td>
                            <td>{{$b->detpaket->paket->name}}</td>
                            <td>{{$b->detpaket->subpaket->name}}</td>
                            <td>{{$b->person}}</td>
                            <td>{{$b->departure}}</td>
                            <td>{{$b->amount}}</td>                            
                            <td>
                                @if($b->confirmation == 0 && is_null($b->payment))
                                    {{'Belum Bayar'}}                               
                                @elseif ($b->confirmation == 0 && $b->payment=='gagal')
                                    {{'Gagal'}}
                                @elseif ($b->confirmation == 1)
                                    {{'Berhasil'}}
                                @else
                                    {{'Menunggu'}}
                                @endif
                            </td>
                            <td style="text-align: center;">
                                @if ($b->confirmation == 0  && is_null($b->payment))  
                                <button type="button" class="btn btn-info fas fa-cloud-upload-alt" value="{{$loop->iteration}}" data-toggle="modal" data-target="#uploadModal{{$b->id}}"></button>
                                @elseif ($b->confirmation == 0 && $b->payment=='gagal')
                                <i class="fas fa-times-circle text-danger"></i>
                                @else
                                <i class="fas fa-check-circle text-success"></i>
                                @endif

                                <!-- Modal -->
                                <div id="uploadModal{{$b->id}}" class="modal fade" role="dialog">
                                  <div class="modal-dialog">
                                
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Upload Proof Payment</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                      <div class="modal-body">
                                        <div class="alert alert-info" role="alert">
                                          File Upload Maximum 1 mb
                                        </div>
                                        @if ($errors->has('payment'))
                                          <div class="alert alert-danger" role="alert">
                                               {{ $errors->first('payment') }}
                                          </div>
                                        @endif
      
                                        {{--  Form upload pembyaran  --}}
                                        <form method='post' action='{{route("uploadbayar.update", ['uploadbayar'=>$b->id])}}' enctype="multipart/form-data">
                                            @method('patch')
                                            {{csrf_field() }}
                                            
                                          Select file : <input type='file' name='payment' id='file' class='form-control' ><br>
                                          
                                          <input type='submit' class='btn btn-info' value='Upload' id='upload'>
                                        </form>
                                      </div>
                                 
                                    </div>

                                  </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
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