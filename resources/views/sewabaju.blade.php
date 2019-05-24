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

<?php foreach ($data as $barang): ?>

        <div class="col-sm-3">
          <table>
            <tr>
              <th>
                <a href="{{route('sewabaju.create')}}">
                  <img src="/upload/barang/{{$barang->gambar}}" alt="" style="width:100px;height:100px;">
                </a>
              </th>
              <td class= "deskripsi">
                <p class="namaewa"><b>Harga Peminjaman</b> Rp{{$barang->harga_barang}},00</p>
                <a class="btn btn-primary" href="{{route('sewabaju.show',['id'=>$barang->id_cus])}}">lihat lapak</a>
              </td>
            </tr>
            <tr>
              <p class="nani"><b>Pakaian {{$barang->nama_barang}}</b></p>
            </tr>
          </table>
        </div>

<?php endforeach; ?>
    </div>
  </div>
@endsection
