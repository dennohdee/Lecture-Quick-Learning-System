@extends('layouts.master')
@section('content')
  <div class="container">
  <h2>My Profile</h2>
  @foreach($me as $me)
 <div class="login-box">
   <!-- /.login-logo -->
   @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <p>{{$message}}</p>
                </div>
              @endif
   <div class="form-group"><l style="font-weight:bold">Name:</l> {{ $me->name}}<br /></div>
   <div class="form-group"><l style="font-weight:bold">Email Address:</l> {{ $me->email}}</div>
  
  <div class="form-group"><l style="font-weight:bold">{{ __('Change Password:') }}</l></div>
    <form method="POST" action="{{ route('profile') }}" aria-label="{{ __('Profile') }}">
    @csrf
    @METHOD('PUT')
      <div class="form-group has-feedback">
        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{__('Password') }}" required autofocus>
        @if ($errors->has('password'))
                                    <span class="iglyphicon glyphicon-user form-control-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
      </div>
      
      <!-- /.col -->
      <div class="form-group has-feedback">
        <input type="password" class="form-control{{ $errors->has('cpassword') ? ' is-invalid' : '' }}" name="cpassword" placeholder="{{__('Confirm Password') }}" required autofocus>
        @if ($errors->has('cpassword'))
                                    <span class="iglyphicon glyphicon-user form-control-feedback" role="alert">
                                        <strong>{{ $errors->first('cpassword') }}</strong>
                                    </span>
                                @endif
      </div>
      <div class="form group">
        <div class="pull-right">
          <button type="submit" class="btn btn-primary">
                                    {{ __('Update Profile') }}
                                </button>
       </div>
     </form>    
     @endforeach  
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
</div>

@endsection
