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
                    <li><a href="#">Paket</a></li>
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
                    <li><a href="#">Paket</a></li>  
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
            <div class="row">
                <div class="col-md-2"></div>
                    <div class="col-md-8 col-sm-12">
                        <div class="card card-booking ">
                            <div class="card-body">
                                <form action="" class="form-cek ">
                                    <div class="row">
                                    <div class="input-group mb-3 col-md-4 col-sm-5">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">
                                                    <i class="fas fa-clipboard-check"></i>
                                            </label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option selected>Pilih Paket..</option>
                                            <option value="1">half day</option>
                                            <option value="2">2 day 1 dight</option>
                                            <option value="3">3 day 2 night</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-3 col-md-4 col-sm-5">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" for="inputGroupSelect01">
                                                <i class="fas fa-list-ol"></i>
                                            </label>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option selected>Pilih Tipe Paket ..</option>
                                            <option value="1">half day</option>
                                            <option value="2">2 day 1 dight</option>
                                            <option value="3">3 day 2 night</option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-group mb-3 col-md-4 col-sm-5">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                        <i class="far fa-calendar-alt"></i>
                                                </span>
                                            </div>
                                                <input type="date" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="input-group mb-3 col-md-4 col-sm-5">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text" for="inputGroupSelect01">
                                                        <i class="fas fa-users"></i>
                                                    </label>
                                                </div>
                                                <select class="custom-select" id="inputGroupSelect01">
                                                    <option selected>Jumalah Orang ..</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                </select>
                                        </div>
                                        <div class="col-md-4 col-sm-3">
                                            <button type="button" class="btn btn-info btn-block">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>    
                <div class="col-md-2"></div>  
                {{-- end    --}}

                <div class="panel booking-us">
                    <div class="tittle-fasilitas">Why Choose Penida Trip ?</div>
                    <div class="contenct-fasilitas">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                            <div class="row">
                            <div class="easy-booking col-md-4 col-sm-12">
                                <i class="far fa-bookmark" id="logobook"></i>
                                <h3 class="logobook2">Mudah Booking</h3>
                                <p class="logobook3">Anda dapat melakukan booking dengan login dan mengecek status tersedianya paket</p>
                            </div>
                            <div class="easy-booking col-md-4 col-sm-12">
                                    <i class="far fa-bookmark" id="logobook55"></i>
                                    <h3 class="logobook2">Mudah Booking</h3>
                                    <p class="logobook3">Anda dapat melakukan booking dengan login dan mengecek status tersedianya paket</p>
                                </div>
                            </div>
                            <div class="easy-booking col-md-4 col-sm-12">
                                    <i class="far fa-bookmark" id="logobook555"></i>
                                    <h3 class="logobook2">Mudah Booking</h3>
                                    <p class="logobook3">Anda dapat melakukan booking dengan login dan mengecek status tersedianya paket</p>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
