<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Resep</title>
    <script src="https://kit.fontawesome.com/51dea02ab7.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div>
        <!-- NAVBAR  -->
        <div>
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
        <!-- BREADCRUMB  -->
        <div class="container m-5">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('user.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('user.daftar.products') }}">GudangResep</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Details</li>
                </ol>
            </nav>
        </div>
        <!-- BREADCRUMB END  -->
        <hr class="container hr" />
        <div class="container d-flex text-center justify-content-center mt-5 mb-5">
            <h3>{{ $resep->nama_resep }}</h3>
        </div>
        <div class="container mb-5 text-center">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-6">
                    <img style="height: 480px; width:300px" src="{{ asset('storage/thumbnail/'.$resep->thumbnail) }}" alt="">
                </div>
                <div class="col justify-content-center text-center">
                    <div class="mt-5">
                        <h3>Cara Pembuatan</h3>
                        <p>{{ $resep->alat }}</p>
                    </div>
                    <div class="mt-5">
                        <h3>Resep-Resep Yang Dibutuhkan</h3>
                        <p>{{$resep->kategori}}</p>
                    </div>
                    <div class="mt-5">
                        <h3>Deskripsi</h3>
                        <p>{{$resep->deskripsi}}</p>
                    </div>
                </div>
            </div>
        </div>

        <hr class="container hr" />

        <h4 class="container text-center mb-3 mt-5">Video Pembuatan {{ $resep->nama_resep }}</h4>
        <div class="container d-flex justify-content-center mb-5">
            <iframe width="560" height="315" src="{{$resep->vidio}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        
        <div class="m-5 d-flex justify-content-center">
            <p style="font-size: medium;">
                <bold>Resep Ini Diposting Oleh : {{ $resep->postedby }}</bold>
            </p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>