@extends('layouts.app')
<link rel="stylesheet" href="/css/desc.css">
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-3 col-sm-6">

            <div class="card hovercard">
                <div class="cardheader">
                </div>
                <div class="avatar">
                    <img alt="" src="{{ asset('upload/lapak/$idsh->file') }}">
                </div>
                <div class="info">
                    <div class="title">
                        <a target="_blank" href="https://scripteden.com/">{{$ids->nama_lapak}}'Salon</a>
                    </div>
                    <div class="desc">ALAMAT</div>
                    <div class="desc">{{$ids->alamat}}</div>
                </div>
                <div class="bottom">


										<a class="btn btn-primary" href="{{url()->previous()}}">Back</a>
								</div>

            </div>

        </div>

	</div>
</div>
@endsection
