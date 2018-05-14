@include('layouts.app-user-new')
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
      </div>
      <div class="card">
        <div class="card-header">
          Profile
        </div>
        <div class="card-body">
          <h5 class="card-title"></h5>
          <div class="row">
            <div class="col-sm-4 text-center">
              <div class="profile-userpic">
                @if (Auth::user()->profilepic == NULL)
                <img src="http://poolwallet.com/assets/img/default.jpg" class="img-responsive" alt="">
               
                
                @endif
              </div>
              
            </div>
            <div class="col-sm-4">
              <h3 class="card-text">Nama</h3>
              <p class="card-text">{{ Auth::user()->name }}</p>
              <h3 class="card-text">E-mail</h3>
              <p class="card-text">{{ Auth::user()->email }}</p>
              <h3 class="card-text">Birth Date</h3>
              <p class="card-text">{{ Auth::user()->birth }}</p>
              <h3 class="card-text">Address</h3>
              <p class="card-text">{{ Auth::user()->address }}</p>
            </div>
            <div class="col-sm-4">
              <a href="/user/{{Auth::user()->id}}/edit" class="button btn btn-primary">Edit Profile</a>
            </div>
          </div>        
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Penida Hill 2018</small>
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