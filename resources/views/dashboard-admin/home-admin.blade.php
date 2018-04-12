@extends('layouts.app-admin')

@section('broadcast.admin')
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
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                <th scope="col">No</th>
                <th scope="col">ID</th>
                <th scope="col">Paket</th>
                <th scope="col">Sub-Paket</th>
                <th scope="col">Personil</th>
                <th scope="col">Total</th>
                <th scope="col">Action</th>
                <th scope="col">Validasi</th>
                <th scope="col">Modal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>123456</td>
                <td>Combo</td>
                <td>Combo 1</td>
                <td>10</td>
                <td>IDR xxxxx</td>
                <td>
                <a class="btn btn-primary" href="#" role="button">Respon</a>
                    <!-- If blm bayar
                    Btn respon
                    Else if sudah bayar 
                    Btn lunas
                    Else 
                    Btn batal -->
                </td>
                <td><a class="btn btn-info" href="#" role="button">Validation</a></td>
                <td><a class="btn btn-light" href="#" role="button">Cek Payment</a></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                <th scope="row">2</th>
                <td>109347</td>
                <td>Spesial</td>
                <td>Spesial 2</td>
                <td>23</td>
                <td>IDR xxxxx</td>
                <td>
                <a class="btn btn-danger" href="#" role="button">Failed</a>
                    <!-- If blm bayar
                    Btn respon
                    Else if sudah bayar 
                    Btn lunas
                    Else 
                    Btn batal -->
                </td>
                <td><a class="btn btn-info" href="#" role="button">Validation</a></td>
                <td><a class="btn btn-light" href="#" role="button">Cek Payment</a></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                <th scope="row">3</th>
                <td>293889</td>
                <td>Eksklusive</td>
                <td>Eksklusive 1</td>
                <td>2</td>
                <td>IDR xxxxx</td>
                <td>
                <a class="btn btn-success" href="#" role="button">Paid Off</a>
                    <!-- If blm bayar
                    Btn respon
                    Else if sudah bayar 
                    Btn lunas
                    Else 
                    Btn batal -->
                </td>
                <td><a class="btn btn-info" href="#" role="button">Validation</a></td>
                <td><a class="btn btn-light" href="#" role="button">Cek Payment</a></td>
                </tr>
            </tbody>
        </table>
        </div>
    </section>
@endsection