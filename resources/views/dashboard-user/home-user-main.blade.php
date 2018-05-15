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
      <div class="alert alert-primary" role="alert">
        <strong>Welcome</strong>, you can check payment & add rating our paket
      </div>
      <div class="card">
        <div class="card-header">
          <a href="/user/{{Auth::user()->id}}/edit" class="button btn btn-primary">
            <i class="fab fa-telegram-plane"></i> Edit Profile
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title"></h5>
          <div class="row">
            <div class="col-sm-7 text-center">
              <div class="profile-userpic">
                @if (isset(Auth::user()->profilepic ))
                  <img src="/upload/profile/{{ Auth::user()->profilepic }}"  class="foto-profile">
                @else
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
              <h3 class="card-text">Gender</h3>
              <p class="card-text">{{ Auth::user()->gender}}</p>
              <h3 class="card-text">Address</h3>
              <p class="card-text">{{ Auth::user()->address }}</p>

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