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
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand fs-4 ms-4" href="{{ route('user.dashboard') }}">DapoerNeda</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse me-1" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">
                                    <stronng>Register</stronng>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.daftar.products') }}">
                                    <storng>Resep</strong>
                                </a>
                            </li>
                            <li>
                            </li>
                        </ul>
                        <div class="m-3">
                            <h5>Halo Selamat Datang, {{ auth()->user()->name }}</h5>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- NAVBAR END  -->
    </div>
    <!-- TAMBAH RESEP  -->
    <div class="container m-5 d-flex justify-content-center text-center">
        <div class="row">
            <h3>Tambahkan Resepmu</h3>
            <p>Tambahkan resepmu disini dan bagikan cita rasa resepmu kepada orang banyak</p>
        </div>
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
                        <div class="form-group mb-3">
                            <label for="alat">alat</label>
                            <input type="text" class="form-control" id="alat" name="alat" placeholder="Penggorengan, panci, dan sodet" value="{{ old('alat') }}">
                        </div>
                        <div class="form-group">
                            <label for="alat">postedby</label>
                            <input type="text" class="form-control" id="postedby" name="postedby" placeholder="Tuliskan Nama Anda Disini" value="{{ old('postedby') }}">
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