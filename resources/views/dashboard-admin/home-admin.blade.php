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
                {{-- <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a> --}}
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
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header headernav">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="dashboard">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="pemesanan">
                            <i class="material-icons">attach_file</i>
                            <span>Pemesanan</span>
                        </a>
                    </li>
                    <li>
                        <a href="reminder">
                            <i class="material-icons">layers</i>
                            <span>Reminder</span>
                        </a>
                    </li>
                    <li>
                        <a href="validasi">
                            <i class="material-icons">widgets</i>
                            <span>Validasi</span>
                        </a>
                    </li>
                    <li>
                        <a href="tour">
                            <i class="material-icons">swap_calls</i>
                            <span>Tour</span>
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
            <div class="block-header">
                <h1>DASHBOARD</h1>
            </div>
            </div>
        </div>
    </section>
@endsection