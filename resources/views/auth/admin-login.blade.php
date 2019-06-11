@extends('layouts.master')

@section('content')
<div class="login-box">
   <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">{{ __('Admin Login') }}</p>

    <form method="POST" action="{{ route('admin.login.submit') }}" aria-label="{{ __('Login') }}">
    @csrf
      <div class="form-group has-feedback">
        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="{{__('Email') }}" required autofocus>
        @if ($errors->has('emaail'))
                                    <span class="iglyphicon glyphicon-user form-control-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
        @if ($errors->has('password'))
                                    <span class="iglyphicon glyphicon-lock form-control-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
      </div>
      <div class="form group row">
        <div class="col-xs-8">
          <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
       </div>
       <div class="col-xs-4">
            <label class="checkbox icheck">
              <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

@endsection