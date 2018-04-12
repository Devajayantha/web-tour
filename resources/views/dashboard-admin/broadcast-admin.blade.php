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
                    <li>
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
                        <a href="promosi">
                            <i class="material-icons">widgets</i>
                            <span>Promosi</span>
                        </a>
                    </li>
                    <li>
                        <a href="tour">
                            <i class="material-icons">swap_calls</i>
                            <span>Tour</span>
                        </a>
                    </li>
                    <li  class="active">
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
        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">Recipients</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Subject</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" rows="3" placeholder="Subject">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
            <form>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Input Picture</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                </form>
            <button type="submit" class="btn btn-primary mb-2">Broadcast</button>
            </form>
        </div>
    </section>
@endsection