<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DapoerNeda | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/51dea02ab7.js" crossorigin="anonymous"></script>
</head>

<body>
    <div>
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
                                    <a class="nav-link" href="{{ route('home') }}">
                                        <stronng class="text-white">Profile</stronng>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.daftar.products') }}">
                                        <storng class="text-white">Resep</strong>
                                    </a>
                                </li>
                                <li>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-end gap-2">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="whatsapp://send?text=Hello&phone=+6281316261862">
                                            <i style="color: white;" class="fa-brands fa-whatsapp"></i>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://www.instagram.com/dapoerneda">
                                            <i style="color: white;" class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://www.youtube.com/@dapoerneda">
                                            <i style="color: white;" class="fa-brands fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- NAVBAR END -->

            <!-- BAGIAN 1 -->
            <div class="">
                <div class="card">
                    <img style="height:100vh;" src="https://images.unsplash.com/photo-1499028344343-cd173ffc68a9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="">
                    <div class="card-img-overlay d-flex align-items-center">
                        <div class="card-body text-light text-center">
                            <h4>Join Bersama Kami <br> Membangun Komunitas Resep</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur, itaque.</p>
                            <div class="d-flex justify-content-center">
                                <div class="me-3">
                                    <a href="{{ route('home') }}" class="btn btn-success">Buka Akun Anda Disini</a>
                                </div>
                                <div>
                                    <a href="{{ route('user.daftar.products') }}" class="btn btn-success">Cek Resep Disini</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BAGIAN 1 END -->

                <!-- CARD TITLE -->
                <div class="container mt-4 d-flex justify-content-center text-center">
                    <div class="row ">
                        <div class="col">
                            <h1>Selamat Datang Pada Website DapoerNeda</h1>
                            <p>Mari bergabung dan sebarkan resep terenak mu</p>
                        </div>
                    </div>
                </div>
                <div class="container mt-4">
                    <div class="row gap-4">
                        <div class="col card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img style="height: 225px;width:400px;" src="https://images.unsplash.com/photo-1546549032-9571cd6b27df?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Spageti Brulle</h5>
                                        <p class="card-text">Spaghetti Brulee artinya adalah campuran resep spaghetti Bolognese dan juga saus béchamel. Untuk proses pembuatannya sendiri dilakukan dengan dipanggang.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img style="height: 225px;width:400px;" src="https://images.unsplash.com/photo-1612240498936-65f5101365d2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Donat</h5>
                                        <p class="card-text">Donat termasuk dalam kategori roti karena menggunakan ragi dan melalui proses pengembangan. Pembuatan donat dapat dibuat dari skala rumahan, UKM, hingga café dan toko spesialis donat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img style="height: 225px;width:400px;" src="https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Salad</h5>
                                        <p class="card-text">Selada (Belanda: salade; bahasa Inggris: salad) adalah jenis makanan yang terdiri dari campuran sayur-sayuran dan bahan-bahan makanan siap santap.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="container hr" />
                <!-- CARD TITLE END -->
                <!-- CAROUSEL -->
                <div class="container">
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img style="height:100vh; width:100vh;" src="https://images.unsplash.com/photo-1625631976982-c6df1654a6ea?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Mari Memasak</h5>
                                    <p>Memasak untuk orang orang yang dicinta akan membuat hubungan lebih harmonis</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img style="height:100vh; width:100vh;" src="https://images.unsplash.com/photo-1599458140258-ace48a8ffe05?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Sebarkan Resep Yang Anda Temukan Untuk Orang Luas</h5>
                                    <p>Berbagi resep berarti berbagi cinta untuk orang banyak</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img style="height:100vh; width:100vh;" src="https://images.unsplash.com/photo-1492739159057-7d1896b3c63f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1332&q=80" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Daftar Sekarang</h5>
                                    <p>Daftarkan diri anda pada website DapoerNeda untuk membagikan cinta lebih luas</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <!-- CAROUSEL END -->
                <hr class="container hr" />
                <div class="container mt-4 d-flex justify-content-center text-center">
                    <div class="row">
                        <div class="">
                            <h1>Mari ikuti Social Media Kami!</h1>
                        </div>
                        <div class="col mt-4 mb-5">
                            <div>
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a href="https://www.instagram.com/dapoerneda" class="nav-link">
                                            <i class="fa-3x fa-brands fa-square-instagram">DapoerNeda</i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>