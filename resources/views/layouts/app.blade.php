<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/main.css') }}">
    <link rel="shortcut icon" href="{{asset('img/logo.png')}}">
    <link rel="stylesheet" href="{{asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.css')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <div class="toggle">
            <i class="fa fa-bars menu" aria-hidden="true"></i>
        </div>
        <a href="{{ url('/') }}">
            <img class="logo-brand" src="{{ asset('img/penida-trip.jpg') }}">
        </a>
       {{--  @if (Route::has('login'))    --}}
        <ul class="ul-navbar">
            @guest
            <li><a href="#">Booking Now</a></li>  
            <li><a href="#">Gallery</a></li>  
            <li><a href="{{ url('contact') }}">Contact</a></li>
            <li><a href="#">Paket</a></li> 
            <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
            <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
            @else
            <li><a href="#">Booking Now</a></li>  
            <li><a href="#">Gallery</a></li>  
            <li><a href="{{ url('contact') }}">Contact</a></li>
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
            @endguest           
        </ul>
    </nav>
    <div>
        @yield('welcome')    
    <div>
    <main class="py-4">
        @yield('content')
    </main>
    <div>
        @yield('contact')
    </div>
    <footer>
        @yield('footer')
    </footer>
        {{--  <script src="{{ asset('js/app.js') }}" defer></script>    --}}
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
