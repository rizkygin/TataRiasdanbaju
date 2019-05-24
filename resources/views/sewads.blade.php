@extends('layouts.netral.app')
<link rel="stylesheet" href="/css/desc.css">
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-sm-12">
            <div class="card hovercard">
                <div class="cardheader" >
                </div>
                <div class="avatar">
                    <img alt="" src="/upload/lapak/{{$idsh->file}}">
                </div>
                <div class="info">
                    <div class="title">
                        <span>{{$idsh->nama_lapak}}'Salon</span>
                    </div>
                    <div class="desc">ALAMAT</div>
                    <div class="desc">{{$idsh->alamat}}</div>
                </div>
                <div class="bottom">
										<a class="btn btn-primary" href="{{url()->previous()}}">Back</a>
								</div>
            </div>
      </div>
	</div>
	<?php foreach ($idbarangs as $idbarang => $value): ?>
		<div class="card" style="width: 18rem;">
		<img class="card-img-top" src="/upload/barang/{{$idbarang->gambar}}" alt="Card image cap">
		<div class="card-body">
			<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
		</div>
	<?php endforeach; ?>

</div>
@endsection
