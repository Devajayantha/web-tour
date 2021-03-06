@include('layouts.app-admin-new')

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Ratings Message</li>
      </ol>
      <div class="alert alert-primary" role="alert">
        Silahkan lakukan verifikasi terhadap rating yang telah diberikan oleh user 
        yang selanjutnya akan ditampilkan di menu utama
      </div>
      {{--  ///////////////////////////////////////////////////  --}}
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            @if(!empty($ratings))
            <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">RatingStars</th>
                <th scope="col">Message</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach($ratings as $r)
                <tr>
                  <td>{{$loop->iteration}}</td>

                  <td>
                    @if($r->stars == 5)
                      <span class="fas fa-star checked"></span>
                      <span class="fas fa-star checked"></span>
                      <span class="fas fa-star checked"></span>
                      <span class="fas fa-star checked"></span>
                      <span class="fas fa-star checked"></span>
                    @elseif($r->stars == 4)
                      <span class="fas fa-star checked"></span>
                      <span class="fas fa-star checked"></span>
                      <span class="fas fa-star checked"></span>
                      <span class="fas fa-star checked"></span>
                    @elseif($r->stars == 3)
                      <span class="fas fa-star checked"></span>
                      <span class="fas fa-star checked"></span>
                      <span class="fas fa-star checked"></span>
                    @elseif($r->stars == 2)
                      <span class="fas fa-star checked"></span>
                      <span class="fas fa-star checked"></span>
                    @elseif($r->stars == 1)
                      <span class="fas fa-star checked"></span>
                    @else
                     <span>Please review our paket</span>
                    @endif
                  </td>
                  <td>{{$r->message}}</td>
                  <td style="text-align: center;">
                    @if($r->confirm_rating == 1)
                      <i class="fas fa-check status_rating" ></i>
                    @else
                      <i class="fas fa-circle-notch waitting"></i>
                    @endif
                  </td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-info" data-toggle="modal"  data-target="#detailReview"><i class="fas fa-eye"></i></button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-fid="{{$r->id}}" data-fconfirm="{{$r->confirm_rating}}" data-target="#validasiConfirm"><i class="far fa-check-circle"></i></button>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-fid="{{$r->id}}" data-fconfirm="{{$r->confirm_rating}}" data-target="#cancelConfirm"><i class="fas fa-ban"></i></button>
                       
                        {{--  Modal Detail Review Rating  --}}
                        @include('layouts.modal-detail-rating')
                          {{-- end modal    --}}                    
                      </div>
                    </a>                    
                  </td>
                </tr>
                @endforeach
            </tbody>
            @else
              <p>Tidak ada Ada</p>
            @endif
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Powered By PenidaHill</div>
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
@include('layouts.modal-validasi-rating')
@include('layouts.modal-batal-validasi-rating')      
@include('layouts.modal-logout-admin')