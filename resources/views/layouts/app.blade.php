<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css') }}">
    <link rel="stylesheet" href="{{asset('css/contact.css') }}">  
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('css/rating-viewers.css')}}">
    <script src="{{asset('js/sweetalert2.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/sweetalert2.min.css')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    
    <link rel="stylesheet" href="{{asset('css/newfooter.css') }}"> 

</head>
<body>
    <nav class="navbar">
        <div class="toggle">
            <i class="fa fa-bars menu" aria-hidden="true"></i>
        </div>
        <a href="{{ url('/') }}">
            <img class="logo-brand" src="{{ asset('img/penida-hill.png') }}">
        </a>
       {{--  @if (Route::has('login'))    --}}
       @if (Route::has('login'))
            <ul class="ul-navbar">
                @auth
                    <li><a href="{{ url('/') }}">Home</a></li> 
                    <li><a href="{{ url('booking') }}">Booking Now</a></li>  
                    <li><a href="{{ url('gallery') }}">Gallery</a></li>  
                    <li><a href="{{ url('contact') }}">Contact</a></li>
                    <li><a href="{{ url('paket') }}">Paket</a></li>

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
                                <a class="dropdown-item" href="/user/dashboard">
                                    Dashboard
                                </a>
            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            </div>
                        </li>
                    @elseif(Auth::guard('admin')->check()) 
                    <li><a href="{{ url('/') }}">Home</a></li> 
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
                    <li><a href="{{ url('/') }}">Home</a></li> 
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
    <div>
        @yield('welcome')    
    <div>
    <main class="py-4">
        @yield('content')
    </main>
    <div>
        @yield('contact')
        {{-- @include('layouts.newfooter') --}}
    </div>
    <div>
        @yield('test');
        @yield('bookingnow')
        @include('layouts.newfooter')
        
    </div>
    <div>
        @yield('modal')
    </div>
  
        {{--  <script src="{{ asset('js/app.js') }}" defer></script>    --}}
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

    {{--paket google api maps  --}}
    <script>
        jQuery(function($) {
                // Asynchronously Load the map API 
            var script = document.createElement('script');
            script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyCyZ0-Zb8oMUelQQv9q77aEJ0jeyXiaMY0&callback=initialize";
            document.body.appendChild(script);
        });
    </script>
    {{-- <script type="text/javascript" src="{{asset('js/map/np-hd-map.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/map/np-2d1n-map.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/map/np-3d2n-map.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/map/nl-hd-map.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/map/nl-2d1n-map.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/map/nl-3d2n-map.js')}}"></script> --}}
    <script type="text/javascript">
        function book(){
            var x = document.getElementById("formBook").elements;
            if (x != ""){
                swal("Success", "You have successfully booked your trip!", "success");
            }
            
        }
    </script>

</body>
</html>
