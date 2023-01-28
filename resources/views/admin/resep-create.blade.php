@extends('admin.layouts.base');
@section('title','Create Resep');
@section('content')
<div class="row">
    <div class="col-md-12">

        {{-- Alert Here --}}
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Menambahkan Resep</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form enctype="multipart/form-data" method="POST" action="{{ route('admin.resep.store') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_resep">Nama Resep</label>
                        <input type="text" class="form-control" id="nama_resep" name="nama_resep" placeholder="Resep Rendang" value="{{ old('nama_resep') }}">
                    </div>
                    <div class="form-group">
                        <label for="vidio">Link Vidio</label>
                        <input type="text" class="form-control" id="vidio" name="vidio" placeholder="vidio url" value="{{ old('vidio') }}">
                    </div>
                    <div class="form-group">
                        <label for="vidio">thumbnail</label>
                        <input type="file" class="form-control" id="thumbnail" name="thumbnail" placeholder="Mohon Sertakan Foto Makanannya" value="{{ old('thumbnail') }}">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Rendang sangat lah lezat" value="{{ old('deskripsi') }}">
                    </div>
                    <div class="form-group">
                        <label for="alat">alat</label>
                        <input type="text" class="form-control" id="alat" name="alat" placeholder="Penggorengan, panci, dan sodet" value="{{ old('alat') }}">
                    </div>
                    <div class="form-group">
                        <label for="postedby">postedby</label>
                        <input type="text" class="form-control" id="postedby" name="postedby" placeholder="Tuliskan Nama Anda Disini" value="{{ old('postedby') }}">
                    </div>
                    <div class="form-group">
                        <label for="kategori">Masukkan Resep Disini</label>
                        <input type="text" class="form-control" id="kategori" name="kategori" placeholder="bawang,garam,merica" value="{{ old('kategori') }}">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection