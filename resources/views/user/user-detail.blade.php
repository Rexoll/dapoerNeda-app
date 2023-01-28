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
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand fs-4 ms-4" href="{{ route('user.dashboard') }}">DapoerNeda</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse me-5" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.dashboard') }}">
                                    <strong>Home</strong>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">
                                    <strong>Register</strong>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.daftar.products') }}">
                                    <strong>Resep</strong>
                                </a>
                            </li>
                            <li>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-end gap-2">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('user.resep.create')}}">Tambahkan Resep Mu!</a>
                                </li>
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
                        <h3>Resep-Resep Yang Dibutuhkan</h3>
                        <p>{{$resep->kategori}}</p>
                    </div>
                    <div class="mt-5">
                        <h3>Alat-Alat Memasak</h3>
                        <p>{{ $resep->alat }}</p>
                    </div>
                    <div class="mt-5">
                        <p style="font-size: medium;"><bold>Resep Ini DiPosting Oleh : {{ $resep->postedby }}</bold></p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="container hr" />
        <h4 class="container text-center mb-3 mt-5">Tutorial Memasak</h4>
        <div class="container d-flex justify-content-center mb-5">
            <video width="750px" height="480px" controls>
                <source src="{{$resep->vidio}}" type="video/mp4" />
            </video>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>