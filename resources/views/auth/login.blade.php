@extends('layouts.app')

@section('content')


   <div class="login-box">
      <div class="login-logo">
        <a href="{{ url('/welcome') }}"><b>Cretch</b>School<t> {{ __('Login') }}</t></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
       <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
          <div class="form-group has-feedback">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
           <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
            </div><!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
       <!--    <p>- OR -</p>
         
          <a href="{{ route('social.oauth', 'facebook') }}" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
          <a href="{{ route('social.oauth', 'google') }}" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a> -->
        </div>

        <!-- /.social-auth-links -->
 <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('I  Forgot Your Password?') }}
                                </a>
     <br>
     <!--    <a href="{{ route('register') }}" class="text-center">Register a new membership</a> -->

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->



 <!--     <div class="form-group row">
          <label for="social" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>
        <div class="col-md-6 col-md-offset-2">
              <p class="lead text-center">Authenticate using your social network account from one of following providers</p>
                    <a href="{{ route('social.oauth', 'facebook') }}" class="btn btn-primary btn-block">
                        Login with Facebook
                    </a> -->
                    <!-- <a href="{{ route('social.oauth', 'twitter') }}" class="btn btn-info btn-block">
                        Login with Twitter
                    </a> -->
                  <!--   <a href="{{ route('social.oauth', 'google') }}" class="btn btn-danger btn-block">
                        Login with Google
                    </a> -->
                   <!--  <a href="{{ route('social.oauth', 'github') }}" class="btn btn-default btn-block">
                        Login with Github
                    </a> -->
     
@endsection
