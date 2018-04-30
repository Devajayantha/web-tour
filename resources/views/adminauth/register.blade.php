<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Register Admin</title>
  <!-- Bootstrap core CSS-->
      <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <!-- Custom fonts for this template-->
      <link rel="stylesheet" href="{{asset('css/fontawesome-all.css')}}">
  <!-- Custom styles for this template-->
      <link rel="stylesheet" href="{{asset('css/sb-admin.css')}}">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register Admin</div>
      <div class="card-body">
        <form method="POST" action="{{ route('admin.register') }}">
        @csrf
          <div class="form-group">          
            <label for="name">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
          </div>
          <div class="form-group">
            <label for="email">{{ __('E-mail Address') }}</label>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <div class="col-md-6">
                <label for="password-confirm">Confirm password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary col-md-12">
              {{ __('Register') }}
          </button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="{{ route('admin.login') }}">Login Page</a>
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