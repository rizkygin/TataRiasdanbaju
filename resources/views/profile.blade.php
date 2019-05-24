@extends('layouts.user.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <img src="/upload/avatars/{{$user ->avatar}}" style="width:100px; height:100px; float:left; border-radius: 50%; margin-right:25px">


        <form class="" action="/profile" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
              <label for=""><h2>{{$user->name}}'s Profile'</h2></label>
          </div>
          <div class="form-group">
            <label for="nama">  
              Nama
            </label>
            <input type="text" name="nama" value="">
          </div>
          <div class="form-group">
            <label for="nama">
              Alamat
            </label>
            <input type="text" name="nama" value="">
          </div>
          <div class="form-group">
            <label for="img">
              Update Profile Image
            </label>
            <input type="file" name="avatar" value=""  style="display:table;">
          </div>
          <div class="form-group">
            <input type="submit" class="pull-right btn btn-sm btn-primary" style="display:table;" >
          </div>
        </form>
    </div>
</div>
@endsection
