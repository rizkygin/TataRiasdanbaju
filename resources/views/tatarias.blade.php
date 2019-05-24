@extends('layouts.netral.app')
<head>
  <link rel="stylesheet" href="/css/main.css">
</head>
@section('content')
  <div class="container">
    @if(Session::has('alert-success'))
        <div class="alert alert-success">
            <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
        </div>
    @endif
    <div class="row">

<?php foreach ($data as $lapak): ?>

        <div class="col-sm-3">
          <table>
            <tr>
              <th>
                <a href="{{ route('tatarias.show', $lapak->id )}}">
                <img src="/upload/lapak/{{$lapak->file}}" alt="" style="width:100px;height:100px;">
                </a>
              </th>
              <td class= "deskripsi">
                  Lapak Id  : {{$lapak->id}} <br>
                <?php $id = $lapak->id ?>
                <a class="btn btn-primary" href="{{route('tatarias.create',$id)}}">Pesan</a>

              </td>
            </tr>
            <tr>
              <a class="namaewa" href="#" class="nama_salon">
              <b class="nani">{{$lapak->nama_lapak}} Salon</b>
              </a>
            </tr>
          </table>
        </div>

<?php endforeach; ?>
    </div>
  </div>
@endsection
