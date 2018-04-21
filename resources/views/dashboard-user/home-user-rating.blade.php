@extends('layouts.app-user')


@section('rating.user')
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
                <li>
                    <a href="/user/home">
                        <i class="material-icons">card_travel</i>
                        <span>Pemesanan</span>
                    </a>
                </li>
                <li class="active">
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
    <div class="container">
    <form method="post" action="/user/addrating">
        {{csrf_field()}}
        <div class="input-group mb-3">
            <input type="text" name="id_user" value="{{ Auth::user()->id}}">
        </div>
        
        <div class="form-group">
            <label for="comment">Your Rating *</label>
            <section name="stars" class='rating-widget'>
                <!-- Rating Stars Box -->
                <div class='rating-stars text-center'>
                    <ul id='stars' class="costom-select">
                        <li class='star' title='Poor' data-value='1' value="1">
                              <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='Fair' data-value='2' value="2">
                              <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='Good' data-value='3' value="3">
                              <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='Excellent' data-value='4' value="4">
                                  <i class='fa fa-star fa-fw'></i>
                        </li>
                        <li class='star' title='WOW!!!' data-value='5'value="5">
                              <i class='fa fa-star fa-fw'></i>
                        </li>
                    </ul>
                </div>
                <input id="stars2" type="hidden" name="stars">
            </section>            
        </div>

        <div class="form-group">
            <label for="comment">Your Message *</label>
            <textarea name="message" class="form-control" rows="5" id="comment"></textarea>
        </div>
        <input type="submit" value="submit" class="btn btn-primary">
    </form>
    </div>
</section>
@endsection