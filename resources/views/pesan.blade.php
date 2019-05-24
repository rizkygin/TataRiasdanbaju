@extends('layouts.netral.app')
@section('content')
<!-- Main Section -->
<section class="main-section">
    <!-- Add Your Content Inside -->
    <div class="content">
        <!-- Remove This Before You Start -->
        <h1>Pemesanan</h1>
        <hr>
        <?php $id = Auth::user()->id  ?>
        <form action="{{ route('bikin',$id) }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nama">Tanggal Pesan:</label>
                <div name="tangal">
                  <?php $mytime = Carbon\Carbon::now();?>
                   <input type="datetime" class="form-control" name="tanggal" value="{{$mytime->toDateTimeString()}}">

                </div>
            <div class="form-group">
                <label for="email">Jenis :</label>
                <div class="form-control">
                  Booking MakeUP
                </div>
            </div>
            <div class="form-group">
                <label for="nohp">No HP:</label>
                <input type="number" class="form-control" id="nohp" name="nohp" value="{{Auth::user()->noHP}}">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan dimana mau Ketemu"></textarea>
            </div>
            <div class="form-group">
                <label for="alamat">lapak ID:</label><br>
                <input class="form-control" type="number" name="lapak_id" value="" placeholder="Masukkan Nomor Lapak ID sesuai di halaman sebelumnya">
            </div>
            <div class="form-group">
              <a class="btn btn-danger" href="{{url()->previous()}}">Back</a>
                <button type="submit" class="btn btn-md btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.content -->
</section>
<!-- /.main-section -->
@endsection
