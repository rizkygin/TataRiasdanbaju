@extends('layouts.app')
@section('content')
<section class="main-section">
    <div class="content">
        <!-- Remove This Before You Start -->
        <h1>Upload Baju</h1>
        <hr>

        <?php $id  = Auth::user()->id?>
        <form action="{{ route('baju',$id ) }}" method="post" enctype="multipart/form-data">
          <!-- action bakalan masuk ke lapak dia dengan gambar yang sudah di edit -->
            {{ csrf_field() }}
            <div class="form-group">
                <label for="namaBaju">Nama Baju</label>
                  <input class="form-control"type="text" name="nama" value="">
            </div>
            <div class="form-group">
                <label for="gambarBaju">Gambar Baju</label>
                   <input type="file" class="form-control" name="gambar">
            </div>
            <div class="form-group">
                <label for="namaBaju">Harga Barang</label>
                  <input class="form-control"type="number" name="harga" value="" placeholder="Rp 20,000.00">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-md btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.content -->
</section>

@endsection
