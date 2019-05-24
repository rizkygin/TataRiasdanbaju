@extends('layouts.user.app')

@section('content')
<div class="mrg">
               <div class="card-body">
                   @if (session('status'))
                       <div class="alert alert-success" role="alert">
                           {{ session('status') }}
                       </div>
                   @endif
               </div>
<div class="jumbotron text-center" style="background-color:#833f52; color:white;">
  <h1>SELAMAT DATANG DI TAWA</h1>
  <p>Web Pembookingan Make Up dan Penyewaan Baju SALON</p>
  <span style="color:#8cceac;">Mau Pesan Apa ?</span>
</div>
<div class="container">
    <div class="row">
      <div class="col-sm-6 " style="text-align:center; color:orange;">
          <h3>TATA RIAS</h3>
          <a href="/tatarias"><img src="img/mkup.png" alt=""></a>
      </div>
      <div class="col-sm-6" style="text-align:center; color:orange;">
          <h3>SEWA BAJU</h3>
          <a href="/sewabaju"><img src="img/baju.png" alt=""></a>
      </div>
    </div>
</div>
</div>

@endsection
