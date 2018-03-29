<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css') }}">
        <link rel="shortcut icon" href="{{asset('img/logo.jpg')}}">
        <link rel="stylesheet" href="{{asset('css/fontawesome-all.css')}}">

        <title>Tour and Travel</title>

        <!-- Fonts -->
        {{--  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">  --}}

    </head>
    <body>
        <nav class="navbar">
            <div class="toggle">
                <i class="fa fa-bars menu" aria-hidden="true"></i>
            </div>
            <a href="http://">
            <img class="logo-brand" src="{{ asset('img/penida-trip.jpg') }}">
            </a>
            @if (Route::has('login'))
            <ul class="ul-navbar">
                @auth
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="#">Booking Now</a></li>  
                    <li><a href="#">Gallery</a></li>  
                    <li><a href="#">Contact</a></li>
                    <li><a href="/paket">Paket</a></li>
                    <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                </a>
            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            </div>
                        </li> 
                    @else
                    <li><a href="#">Booking Now</a></li>  
                    <li><a href="#">Gallery</a></li>  
                    <li><a href="#">Contact</a></li>
                    <li><a href="/paket">Paket</a></li>  
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @endif
                </ul>
           @endif  
        </nav>

        {{--  slie show  --}}
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('img/gambar2.jpg')}}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/gambar1.jpg')}}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/gambar2.jpg')}}" alt="Third slide">
              </div>
            </div>
        </div>

        {{--  content  --}}
        <div class="container">
            <div class="row promo">
                <div class="col-sm-4"></div>
                <div class="col-md-4 col-md-offset-4"><h3>Today's Hot Promo</h3></div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('img/gambarpaket1.jpg')}}"> <!--gambar bisa diganti lagi-->
                        <div class="card-body">
                            <h5 class="card-title">HALF-DAY</h5>
                            <s class="card-text">Rp xxx.xxx/orang</s>
                            <p class="promo-text">Rp xxx.xxx/orang</p>
                            <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                        </div> 
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('img/gambarpaket2.jpg')}}"> <!--gambar bisa diganti lagi-->
                          <div class="card-body">
                            <h5 class="card-title">1 DAY 1 NIGHT</h5>
                            <s class="card-text">Rp xxx.xxx/orang</s>
                            <p class="promo-text">Rp xxx.xxx/orang</p>
                            <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                          </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('img/gambarpaket3.jpg')}}"> <!--gambar bisa diganti lagi-->
                          <div class="card-body">
                            <h5 class="card-title">3 DAYS 2 NIGHTS</h5>
                            <s class="card-text">Rp x.xxx.xxx/orang</s>
                            <p class="promo-text">Rp xxx.xxx/orang</p>
                            <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                          </div>
                    </div>
                </div>
            </div> 
        </div> 
        @extends('layouts.footer')
  
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
