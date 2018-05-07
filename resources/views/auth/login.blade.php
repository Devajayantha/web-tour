@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-4">
                <div>
                    <img class="login-image" src="{{asset('img/tourlogin.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="box-form">
                    <div class="form-signin">
                        <h2 class="title" >Login</h2><br>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">{{ __('E-Mail Address') }}<</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
    
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                           <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                           <div class="form-group">
                             <div class="form-check">
                               <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                               </label>
                             </div>
                           </div>
                           <button type="submit" class="btn btn-primary col-md-12">
                                {{ __('Login') }}
                           </button>
                         </form>
                         <div class="text-center">
                           <a class="d-block small mt-3" href="{{ route('register')}}">{{ __('Register an Account') }}</a>
                           <a class="d-block small" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                         </div>
                 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        @font-face {
            font-family: "Quantify";
            src: url('Quantify Bold v2.6.ttf');
         }
         
         *{
             padding: 0;
         }
         .login-image{
             width: 700px;
             margin-top:100px;
         }
         body{
             margin:0;
         }
         .form-signin{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
           max-width: 380px;
           padding: 15px 35px 15px;
           margin: 0 auto;
           background-color: rgba(255,255,255,0.6);
           border: 1px solid rgba(0,0,0,0.1);
         }
         
         .box-form{
             padding-top: 25%;
         }
         /* title h2 */
         .title{
             font-family: "Quantify";
             font-size: 35px;
             color :#757575;
             text-align: center;
             padding-top: 5px;
         }
         
</style>
@endsection


