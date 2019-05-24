@extends('layouts.user.daftarlapak.app')

@section('content')
<section class="main-section">
    <!-- Add Your Content Inside -->
    <div class="content">
        <!-- Remove This Before You Start -->
        <h1>Daftar Lapak</h1>

        <?php $id  = Auth::user()->id?>
        <form action="{{ route('daftarlapak',$id) }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nama">Nama Lapak</label>
                <div name="tangal">
                   <input type="text" class="form-control" name="nama" placeholder="Tawa ">

                </div>
            <div class="form-group">
                <label for="alamat">Alamat :</label>
                <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat lapak"></textarea>
            </div>
            <div class="form-group">
              <label for="alamat">Jasa MakeUp untuk 1</label><br>
              <label for="alamat">Jasa Penyewaan Baju untuk 2</label><br>
              <input type="number" name="valuelapak" value="">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-md btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.content -->
</section>
@endsection
