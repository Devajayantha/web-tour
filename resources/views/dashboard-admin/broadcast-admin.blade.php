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
          <i class="fa fa-table"></i>Broadcast Paket</div>
        <div class="card-body">
        <form action="{{ route('sendmail') }}" method="POST">
            {{ csrf_field() }}  
            <select class="js-example-basic-multiple-limit form-control" name="subsribe[]" id="subsribe"multiple="multiple">
              @foreach ($subsribe as $s)
              <option value="{{$s->email}}"> {{$s->email}} </option>
              @endforeach
            </select>
            <div class="form-group">
                <label for="exampleFormControlInput1">Subject</label>
                <input type="text" name="subject" class="form-control" id="exampleFormControlInput1" rows="3" placeholder="Subject">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea name="message_email" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2">Broadcast</button>       
        </form>
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
@include('layouts.modal-exit-admin')