@include('layouts.app-admin-new')

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Broadcast Paket </li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
        <form action="{{ route('sendmail') }}" method="POST">
            {{ csrf_field() }}  
          {{--  <div class="form-group">
                <label for="exampleFormControlInput1">Recipients</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email@example.com">
            </div>  --}}
            <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                
                <select class="form-control" id="exampleFormControlSelect1" name="mail">
                  @foreach ($subsribe as $s)
                  <option value="{{$s->email}}"> {{$s->email}} </option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Subject</label>
                <input type="text" name="subject" class="form-control" id="exampleFormControlInput1" rows="3" placeholder="Subject">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea name="message_email" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="message"></textarea>
            </div>
             <div class="form-group">
                <label for="exampleFormControlFile1">Input Picture</label>
                <input type="file" name="picture" class="form-control-file" id="exampleFormControlFile1">
            </div> 
            <button type="submit" class="btn btn-primary mb-2">Broadcast</button>
                
        </form>
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