@extends('layouts.base') @section('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}"> 
@endsection 
@section('content')
<div class="col-md-12 flex-lg">
        <div class="row">
            <div class="panel-c panel-flex">
                <div class="panel panel-default panel-login">
                    <div class="panel-header">
                        <p class="text-center">{{Lang::get('auth.login')}}</p>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                
                                <label for="username" class="col-md-4 control-label inline-l"><span class="icon-l"><i class="fas fa-user"></i></span> {{Lang::get('auth.username')}}</label>

                                <div class="col-md-12">
                                    <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>                                @if ($errors->has('email'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span> @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label inline-l"> <span class="icon-l"><i class="fas fa-unlock-alt"></i></span> Password</label>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control" name="password" required> @if ($errors->has('password'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span> @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{Lang::get('auth.intro')}}
                                    </button>

                                    <!--<a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>-->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection