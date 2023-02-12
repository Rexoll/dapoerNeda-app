<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dapoer Ne'da | Create</title>
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
    <div class="container mt-4">
        <div class="row d-flex justify-content-center text-center">
            <h3>Tambahkan Resepmu</h3>
            <p>Tambahkan resepmu disini dan bagikan cita rasa resepmu kepada orang banyak</p>
        </div>
    </div>

    <div class="container m-3 d-flex justify-content-center text-center">
    </div>
    <!-- TAMBAH RESEP END  -->
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="col-md-12">
                <form enctype="multipart/form-data" method="POST" action="{{ route('user.resep.store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="nama_resep">Nama Resep</label>
                            <input type="text" class="form-control" id="nama_resep" name="nama_resep" placeholder="Resep Rendang" value="{{ old('nama_resep') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="vidio">Link Vidio</label>
                            <input type="text" class="form-control" id="vidio" name="vidio" placeholder="vidio url" value="{{ old('vidio') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="vidio">thumbnail</label>
                            <input type="file" class="form-control" id="thumbnail" name="thumbnail" placeholder="Mohon Sertakan Foto Makanannya" value="{{ old('thumbnail') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Rendang sangat lah lezat" value="{{ old('deskripsi') }}">
                        </div>
                        <div class="form-group">
                            <div class="mb-3">
                                <label for="bahan" class="form-label">Masukkan bahan bahan yang dibutuhkan</label>
                                <textarea class="form-control" id="bahan" name="bahan" placeholder="Bawang,tomat,garam" rows="3" value="{{ old('bahan') }}"></textarea>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="mb-3">
                                <label for="cara_pembuatan" class="form-label">Cara Pembuatan</label>
                                <textarea class="form-control" id="cara_pembuatan" rows="3" name="cara_pembuatan" placeholder="Masukkan Alat Alat yang Dibutuhkan " value="{{ old('cara_pembuatan') }}"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer mt-3 mb-5">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>