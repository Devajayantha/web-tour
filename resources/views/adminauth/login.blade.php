<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login Admin</title>
  <!-- Bootstrap core CSS-->
      <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <!-- Custom fonts for this template-->
      <link rel="stylesheet" href="{{asset('css/fontawesome-all.css')}}">
  <!-- Custom styles for this template-->
      <link rel="stylesheet" href="{{asset('css/sb-admin.css')}}">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login Admin</div>
      <div class="card-body">
        <form method="POST" action="{{ route('admin.login') }}">
           @csrf
          <div class="form-group">
            <label for="email">Email address</label>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

              @if ($errors->has('email'))
              <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
              @endif
          </div>
          <div class="form-group">
            <label for="password">Password</label>
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
          <a class="d-block small mt-3" href="{{ route('admin.register') }}">Register an Account</a>
          <a class="d-block small" href="{{ route('password.request') }}">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>