<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Welcome To | Penida Admin Dashboard</title>
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="{{asset('css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="{{asset('vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{asset('css/sb-admin.css') }}" rel="stylesheet">
  <link href="{{ asset('css/rating.css') }}" rel="stylesheet">
  {{--  <link href="{{ asset('css/one-page-wonder.css') }}" rel="stylesheet">  --}}
  <link href="{{ asset('css/agenda.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

</head>

<body class="fixed-nav2 sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top nav-color" id="mainNav">
    <a class="navbar-brand" href="index.html">My Account</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title=""Booking>
          <a class="nav-link" href="{{ url('/admin/dashboard')}}">
            <i class="fas fa-suitcase"></i>
            <span class="nav-link-text">Booking</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="{{ url('admin/reminder')}}">
            <i class="far fa-calendar-alt"></i>
            <span class="nav-link-text">Schedule</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
            <a class="nav-link" href="{{url('admin/rating')}}">
              <i class="fab fa-snapchat"></i>
              <span class="nav-link-text">Rating Message</span>
            </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
            <a class="nav-link" href="{{route('admin-broadcast')}}">
                <i class="fas fa-bullhorn"></i>
                <span class="nav-link-text">Broadcast</span>
            </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul  class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link">
            Hello, {{ Auth::guard('admin')->user()->name }}<span class="caret"></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-sign-out-alt"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('js/app.js')}}"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    //<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{asset('vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{asset('vendor/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin.min.js') }}"></script>
    <!-- Custom scripts for this page-->
    <script src="{{asset('js/sb-admin-datatables.min.js') }}"></script>
    <script src="{{asset('js/sb-admin-charts.min.js') }}"></script>
    <script src="{{asset('js/rating.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
  </div>
</body>

</html>
