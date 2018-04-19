@extends('layouts.app-admin')

@section('home.admin')
<div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                {{--  <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>  --}}
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="#">Admin Dashboard</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse"></div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <!-- <li>
                        <a href="dashboard">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li> -->
                    <li class="active">
                        <a href="home">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="reminder">
                            <i class="material-icons">layers</i>
                            <span>Reminder</span>
                        </a>
                    </li>
                    <li>
                        <a href="rating">
                            <i class="material-icons">star</i>
                            <span>Rating</span>
                        </a>
                    </li>
                    <li>
                        <a href="broadcast">
                            <i class="material-icons">speaker_notes</i>
                            <span>Broadcast</span>
                        </a>
                    </li>
                    <li>
                        <a href="login">
                            <i class="material-icons">person</i>
                            <span>Log Out</span>
                        </a>
                    </li>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
        <div style="font-size:30px;color:black">Daftar Pemesanan</div><br>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">ID</th>
                <th scope="col">Paket</th>
                <th scope="col">Sub-Paket</th>
                <th scope="col">Person</th>
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
                        @if($b->confirmation == 0)
                            {{'Belum Bayar'}}
                        @else
                            {{'Sudah Bayar'}}
                        @endif
                        </td>
                        <td>
                            {{--  <!-- Button trigger modal -->  --}}
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#paymentModal">
                                check
                            </button>
                            
                            {{--  <!-- Modal pembayaran -->  --}}
                            <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    ...
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
    </section>
@endsection