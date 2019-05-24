@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <img src="/upload/lapak/$lapaks->file" style="width:100px; height:100px; float:left; border-radius: 50%; margin-right:25px">

<?php $id  = Auth::user()->id?>
        <form class="" action="{{route('lapak',$id)}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="form-group">
              <label for=""><h2>Profil Lapak {{$lapaks->nama_lapak}}</h2></label>
          </div>
          <div class="form-group">
            <label for="nama">
              Ganti Nama
            </label>
            <input type="text" name="nama" value="">
          </div>
          <div class="form-group">
            <label for="nama">
              Ganti Alamat
            </label>
          </div>
          <textarea name="alamat" rows="8" placeholder="{{$lapaks->alamat}}" cols="80"></textarea>
          <div class="form-group">
            <label for="img">
              Lapak Image
            </label>
            <input type="file" name="gambarlapak" value=""  style="display:table;">
          </div>
          <div class="form-group">
            <input type="submit" class="pull-right btn btn-sm btn-primary" style="display:table;" >
          </div>
        </form>
    </div>
</div>


@endsection
