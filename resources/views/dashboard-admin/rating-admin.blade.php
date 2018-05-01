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
                <th scope="col">Nama</th>
                <th scope="col">Rating Stars</th>
                <th scope="col">Pesan</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach($ratings as $r)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$r->name}}</td>
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
                    @else
                      <span class="fas fa-star checked"></span>
                    @endif
                  </td>
                  <td>{{$r->message}}</td>
                  <td>
                    <a href="#" class="btn btn-danger btn-lg">
                      <span class="fas fa-trash"></span>
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
          <button type="submit" class="btn btn-info"> Submit</button>
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