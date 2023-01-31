@extends('admin.layouts.base');
@section('title','Edit Resep');
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
                <h3 class="card-title">Edit Resep</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form enctype="multipart/form-data" method="POST" action="{{ route('admin.resep.update', $resep->id) }}">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label for="nama_resep">Nama Resep</label>
                        <input type="text" class="form-control" id="nama_resep" name="nama_resep" placeholder="Resep Rendang" value="{{ $resep->nama_resep }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="vidio">Link Vidio</label>
                        <input type="text" class="form-control" id="vidio" name="vidio" placeholder="vidio url" value="{{ $resep->vidio }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="vidio">thumbnail</label>
                        <input type="file" class="form-control" id="thumbnail" name="thumbnail" placeholder="Mohon Sertakan Foto Makanannya" value="{{ $resep->thumbnail }}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Rendang sangat lah lezat" value="{{ $resep->deskripsi }}">
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Masukkan bahan bahan yang dibutuhkan</label>
                            <textarea class="form-control" id="kategori" name="kategori" placeholder="Bawang,tomat,garam" rows="3" value="{{ $resep->kategori }}"></textarea>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <div class="mb-3">
                            <label for="alat" class="form-label">Cara Pembuatan</label>
                            <textarea class="form-control" id="alat" rows="3" name="alat" placeholder="Masukkan Cara Pembuatan Disini" value="{{ $resep->alat }}"></textarea>
                        </div>
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