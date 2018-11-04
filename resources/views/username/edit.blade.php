@extends('layouts.base') @section('content')
<div class="container">
    <h2 class="title-edit">{!!Lang::get('user.titleEdit')!!}</h2>
    <form  action="{{route('user.update')}}" method="post" >
    <!--- enctype="multipart/form-data" -->
         {{ csrf_field() }}
        <div class="row">
            <div class="col-md-6">
                <div class="i-avatar">
                <img class="img-avatar" src="{{asset('image/username/'.$user->avatar)}}" alt="{{$user->avatar}}">
                </div>
                <div class="icons-edit">
                <span class="click-icon"><i class="far fa-edit fa-2x"></i></span><span class="click-icon"><i class="far fa-trash-alt fa-2x"></i></span>
                </div>
                <label for="inputAvatar">avatar</label>
                <!--input type="file" class="form-control" id="inputAvatar" -->
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="inputName">{!!Lang::get('user.name')!!}</label>
                    <input type="text" class="form-control" id="inputName" name="inputName" placeholder="{!!Lang::get('user.placeholder.name')!!}" value="{{$user->name}}">
                </div>

                <div class="form-group">
                    <label for="inputEmail">{!!Lang::get('user.email')!!}</label>
                    <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="{!!Lang::get('user.placeholder.email')!!}" value="{{$user->email}}">
                </div>

                <div class="form-group">
                    <label for="inputUserName">{!!Lang::get('user.username')!!}</label>
                    <input type="text" class="form-control" id="inputUserName" name="inputUserName" placeholder="{!!Lang::get('user.placeholder.username')!!}" value="{{$user->username}}">
                </div>

                <!--<div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>-->
                <button type="submit" class="btn btn-primary">{!!Lang::get('user.button.update')!!}</button>

            </div>
        </div>


    </form>

</div>
@endsection