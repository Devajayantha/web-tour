@extends('layouts.app')


@section('test')
<link rel="stylesheet" href="{{asset('css/auth.css') }}">
<div class="lowin">
    <div class="lowin-brand">
        <img src="kodinger.jpg" alt="logo">
    </div>
    <div class="lowin-wrapper">
        <div class="lowin-box lowin-login">
            <div class="lowin-box-inner">
                <form action="">
                    <p>Sign in to continue</p>
                    <div class="lowin-group">
                        <label>Email <a href="#" class="login-back-link">Sign in?</a></label>
                        <input type="email" autocomplete="email" name="email" class="lowin-input">
                    </div>
                    <div class="lowin-group password-group">
                        <label>Password <a href="#" class="forgot-link">Forgot Password?</a></label>
                        <input type="password" name="password" autocomplete="current-password" class="lowin-input">
                    </div>
                    <button class="lowin-btn login-btn">
                        Sign In
                    </button>

                    <div class="text-foot">
                        Don't have an account? <a href="" class="register-link">Register</a>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <footer class="lowin-footer">
        Design By <a href="http://fb.me/itskodinger">@itskodinger</a>
    </footer>
</div>

<script src="{{asset('js/auth.js') }}"></script>
<script>
    Auth.init({
        login_url: '#login',
        forgot_url: '#forgot'
    });
</script>
@endsection
