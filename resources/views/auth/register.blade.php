{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="number" class="form-control @error('email') is-invalid @enderror" name="phone" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Register | BLKM</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{asset('style/images/LogoJabar.jpg')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('style/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('style/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('style/dist/css/adminlte.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="text-center">
            
            <img src="{{asset('style/images/LogoJabar.jpg')}}"  class="brand-image img-circle elevation-3" style="width: 20%;">
        </div>
        <div class="login-logo">
            <a href="../../index2.html">Sistem Pendaftaran Peserta BLKM</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
              <p class="login-box-msg">Silahkan Registrasi Akun Kedalam Sistem</p>

              <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input-group mb-3">
                  <input type="text" name="name" class="form-control" placeholder="Nama Lengkap">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user"></span>
                  </div>
              </div>
              @error('name')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="input-group mb-3">
          <input type="number" name="phone" class="form-control" placeholder="Nomor HP">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
          </div>
      </div>
      @error('no_hp')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
<div class="input-group mb-3">
  <input type="password" class="form-control" name="password" placeholder="Password">
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-lock"></span>
  </div>
</div>
@error('password')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror
</div>
<div class="input-group mb-3">
  <input type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation">
  <div class="input-group-append">
    <div class="input-group-text">
      <span class="fas fa-lock"></span>
  </div>
</div>
</div>
<!-- /.col -->
<div class="text-center">
    <button type="submit" class="btn btn-success btn-block">Register</button>
</div>
<div class="text-center mt-2">
  <a href="{{ route('login') }}" class="btn btn-primary btn-block" title="">Login</a>
</div>
<!-- /.col -->
</div>
</form>

</div>
<!-- /.login-card-body -->
</div>
</div>

<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('style/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('style/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('style/dist/js/adminlte.min.js') }}"></script>

</body>
</html>