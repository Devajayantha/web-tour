<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css') }}">
        <link rel="shortcut icon" href="{{asset('img/logo.png')}}">
        <link rel="stylesheet" href="{{asset('css/fontawesome-all.css')}}">
        <link rel="stylesheet" href="{{asset('css/footer.css')}}">
        <link rel="stylesheet" href="{{asset('css/newfooter.css') }}">
        <link rel="stylesheet" href="{{asset('css/sweetalert2.min.css')}}">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Penida Hill Tour N Travel</title>

        <!-- Fonts -->
        {{--  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">  --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <nav class="navbar">
            <div class="toggle">
                <i class="fa fa-bars menu" aria-hidden="true"></i>
            </div>
            <a href="http://">
            <img class="logo-brand" src="{{ asset('img/penida-hill.png') }}">
            </a>
            @if (Route::has('login'))
            <ul class="ul-navbar">
                @auth
                    <li><a href="{{ url('booking') }}">Booking Now</a></li>  
                    <li><a href="{{ url('gallery') }}">Gallery</a></li>  

                    <li><a href="{{ url('contact') }}">Contact</a></li>
                    <li><a href="{{ url('paket') }}">Paket</a></li>

                    <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="/user/dashboard">
                                    Dashboard
                                </a>
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
                    @elseif(Auth::guard('admin')->check()) 
                    <li><a href="{{ url('booking') }}">Booking Now</a></li>  
                    <li><a href="{{ url('gallery') }}">Gallery</a></li>  

                    <li><a href="{{ url('contact') }}">Contact</a></li>
                    <li><a href="{{ url('paket') }}">Paket</a></li>

                    <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::guard('admin')->user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('admin.logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                </a>
                                <a class="dropdown-item" href="/admin/dashboard">
                                    Dashboard
                                </a>
            
                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            </div>
                        </li>
                    @else
                    <li><a href="{{ url('booking') }}">Booking Now</a></li>  
                    <li><a href="{{ url('gallery') }}">Gallery</a></li>  
                    <li><a href="{{ url('contact') }}">Contact</a></li>
                    <li><a href="{{ url('paket') }}">Paket</a></li> 
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
                                <script>
                                    function submitForm() {
                                        var selectedOption = $('#inputGroupSelect01').val();
                                        var selectedOption2 = $('#inputGroupSelect02').val();
                                        var url = "";
                                        if (selectedOption == '1') {
                                            if (selectedOption2 == '1'){
                                                url = "{{ route('nusapenida-hd')}}";
                                            }else if (selectedOption2 == '2'){
                                                url = "{{ route('nusapenida-2d1n')}}";
                                            }else if (selectedOption2 == '3'){
                                                url = "{{ route('nusapenida-3d2n')}}";
                                            }else{
                                                url = "{{ route('nusapenida')}}";
                                            }
                                        } else if (selectedOption == '2') {
                                            
                                            if (selectedOption2 == '1'){
                                                url = "{{ route('lembongan-hd')}}";
                                            }else if(selectedOption2 == '2'){
                                                url = "{{ route('lembongan-2d1n')}}";
                                            }else if(selectedOption2 == '3'){
                                                url = "{{ route('lembongan-3d2n')}}";
                                            }else{
                                                url = "{{ route('nusalembongan')}}";
                                            }
                                        }else{
                                            alert ("False");
                                        }

                                        //console.log(url);
                                        $('form#myForm').attr('action', url);
                                        return true;
                                    }
                                </script>
                                <form method="get" id="myForm" onsubmit="return submitForm()">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="input-group mb-3 col-md-4 col-sm-6">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect01">
                                                    <i class="fas fa-clipboard-check"></i>
                                                </label>
                                            </div>
                                            <select class="custom-select" id="inputGroupSelect01" name="action">
                                                <option selected>Pilih Paket..</option>
                                                <option value="1">Nusa Penida</option>
                                                <option value="2">Nusa Lembongan</option>
                                            </select>
                                        </div>
                                        <div class="input-group mb-3 col-md-4 col-sm-6">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect01">
                                                    <i class="fas fa-list-ol"></i>
                                                </label>
                                            </div>
                                            <select class="custom-select" id="inputGroupSelect02" name="action">
                                                <option selected>Pilih Tipe Paket ..</option>
                                                <option value="1">half day</option>
                                                <option value="2">2 day 1 dight</option>
                                                <option value="3">3 day 2 night</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <button type="submit" class="btn btn-info btn-block">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>  
                    </div>    
                <div class="col-md-2"></div>  

                <div class="panel booking-us">
                    <div class="tittle-fasilitas">Why Choose Penida Hill </div>
                    <div class="contenct-fasilitas">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <div class="row">
                                    <div class="easy-booking col-md-4 col-sm-12">
                                        <i class="far fa-bookmark logobook"></i>
                                        <h3 class="logobook2">Payment by Cash</h3>
                                        <p class="logobook3">Ticket purchases become more flexible with various 
                                            payment BY Cash Transfer   </p>
                                    </div>
                                    <div class="easy-booking col-md-4 col-sm-12">
                                            <i class="fab fa-periscope logobook"></i>
                                            <h3 class="logobook2">Special Promo</h3>
                                            <p class="logobook3">Get spesial promo tour after join with us. Register now and booking our package</p>
                                    </div>
                                    <div class="easy-booking col-md-4 col-sm-12">
                                        <i class="fas fa-suitcase logobook"></i>
                                        <h3 class="logobook2">Easy Booking</h3>
                                        <p class="logobook3">Booking from website or direct booking by phone, email and facebook. Direct booking is cheaper</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>
                {{-- end   --}}

        {{--  start  --}}
        <div class="container">
            <div class="panel promo">
                <h2 class="text-sm-center title-promo" >Hottest Promo</h2>
                <div class="promo-content">
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-4">
                            <div class="card">
                                <img class="card-img-top" src="{{asset('img/paket/Promo_NP_HD.jpg')}}"> 
                                    <div class="card-body">
                                    <h5 class="card-title">HALF-DAY</h5>
                                    <s class="card-text">Rp 500.000/person</s>
                                    <p class="promo-text">Rp 400.000/person</p>
                                    <a href="/nusa-penida/halfday" class="btn btn-primary">See Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <img class="card-img-top" src="{{asset('img/paket/Promo_NP_3D2N.jpg')}}"> 
                                <div class="card-body">
                                    <h5 class="card-title">3 DAYS 2 NIGHTS</h5>
                                    <s class="card-text">Rp 3.000.000/person</s>
                                    <p class="promo-text">Rp 2.500.000/person</p>
                                    <a href="/nusa-penida/3d2n" class="btn btn-primary">See Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="subscribe">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <div class="text-subsribe">
                        <h2>Subscribe to Our newsletter</h2>
                        <p>Sign up here to get the latest news,updates and special promo in Penida Trip delivered directly to your inbox</p>
                        <form action="/" method="post"id ="broadcastForm" onsubmit="broadcast()">
                            {{csrf_field()}}
                        <div class="input-group mb-3">
                            <input type="text" class="form-control"name="email" placeholder="submit your email" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="submit btn btn-primary far fa-envelope" type="submit" ></button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12">
                    <div class="logo">
                        <img class="logo-subsribe" src="{{asset('img/email.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
@include('layouts.newfooter')
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
        <script src="{{asset('js/sweetalert2.min.js')}}"></script>
        <script type="text/javascript">
            function broadcast(){
                var x = document.getElementById("broadcastForm").elements;
                if (x!="") {
                    swal("Success!","You'll be subscribed to our newsletter"); 
                }    
            };
        </script>
    </body>
</html>
