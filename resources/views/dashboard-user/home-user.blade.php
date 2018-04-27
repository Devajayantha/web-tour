@extends('layouts.app-user')

@section('home.user')
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
                <a class="navbar-brand" href="#">User Dashboard</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse"></div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="/user/home">
                            <i class="material-icons">card_travel</i>
                            <span>Pemesanan</span>
                        </a>
                    </li>
                    <li>
                        <a href="/user/addrating">
                            <i class="material-icons">star</i>
                            <span>Rating</span>
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <i class="material-icons">home</i>
                            <span>Back to Home</span>
                        </a>
                    </li>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="table-responsive-sm">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID Booking</th>
                            <th scope="col">Paket</th>
                            <th scope="col">Subpaket</th>
                            <th scope="col">Person</th>
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
                                @elseif ($b->confirmation == 0 && $b->payment !== '')
                                    {{'Menunggu'}}
                                @else
                                    {{'Berhasil'}}
                                @endif
                            </td>
                            <td>
                                <button type="button" class="btn btn-info" value="{{$loop->iteration}}" data-toggle="modal" data-target="#uploadModal{{$b->id}}">Upload file</button>

                                <!-- Modal -->
                                <div id="uploadModal{{$b->id}}" class="modal fade" role="dialog">
                                  <div class="modal-dialog">
                                
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                      <div class="modal-body">
                                        {{--  Form upload pembyaran  --}}
                                        <form method='post' action='{{route("uploadbayar.update", ['uploadbayar'=>$b->id])}}' enctype="multipart/form-data">
                                            @method('patch')
                                            {{csrf_field() }}
                                          Select file : <input type='file' name='payment' id='file' class='form-control' ><br>
                                          <input type='submit' class='btn btn-info' value='Upload' id='upload'>
                                        </form>
                                
                                        <!-- Preview-->
                                        <div id='preview'></div>
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
    </section>
@endsection