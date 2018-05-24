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
          <div class="agenda">
          <div class="table-responsive">
            <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Event</th>
                        <th>Person</th>
                        <th>User</th>
                        <th>Booking</th>
                    </tr>
                </thead>
                <tbody>
                @if(count($jadwal))
                  @foreach($jadwal as $j)
                    <!-- Single event in a single day -->
                  
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td class="agenda-date" class="active" rowspan="1">
                            <div class="dayofmonth">{{date('j',strtotime($j->departure))}}</div>
                            <div class="dayofweek">{{date('l',strtotime($j->departure))}}</div>
                            <div class="shortdate text-muted">{{date('F \, Y',strtotime($j->departure))}}</div>
                        </td>
                        <td class="agenda-time">
                            7 : 00 PM
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
                                {{$j->subpaket}}
                                {{$j->paket}}
                            </div>
                        </td>
                        <td class="agenda-events">
                            {{$j->person}}
                        </td>
                        <td class="agenda-events">
                            {{$j->name}}
                        </td>
                        <td class="agenda-events">
                            {{date('j F Y',strtotime($j->created_at))}}
                        </td>
                    </tr>
                   
                    @endforeach
                  @endif
                </tbody>            
            </table>
          </div>
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
    @include('layouts.modal-exit-admin')