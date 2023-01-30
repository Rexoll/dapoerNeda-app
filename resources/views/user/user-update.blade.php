<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src="https://kit.fontawesome.com/51dea02ab7.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div>
        <!-- NAVBAR -->
        <div class="">
            <nav style="background-color: #FCAE1E;" class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <div class="row">
                        <a class="col ms-3" href="{{route('user.dashboard')}}">
                            <img src="{{asset('image/LogoDapoerNeda.png')}}" style="height: 48px; width:50px;" alt="">
                        </a>
                        <a class="navbar-brand fs-5 text-white col" href="{{ route('user.dashboard') }}">Dapoer Ne'da</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse me-5" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{route('user.dashboard')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.daftar.products') }}">
                                    <storng class="text-white">Resep</strong>
                                </a>
                            </li>
                            <li>
                            </li>
                        </ul>
                        <div class="dropdown">
                            <button class="btn btn-transperency text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Selamat Datang {{ auth()->user()->name }}

                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{route('profile')}}">Buka Profile Mu</a></li>
                                <li><a class="dropdown-item" href="{{route('user.resep.create')}}">Tambahkan Resep Ala Kamu yu!</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- NAVBAR END  -->
    </div>
    <!-- TAMBAH RESEP  -->
    <div class="container justify-content-center mt-5">
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

                <div class="card card-primary mb-5">
                    <div class="card-header">
                        <h3 class="card-title">Edit Resep</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                        <form enctype="multipart/form-data" method="POST" action="{{ route('user.resep.update', $resep->id) }}">
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>