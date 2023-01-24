<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DapoerNeda | GudangResep</title>
    <script src="https://kit.fontawesome.com/51dea02ab7.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="">
        <div>
            <div class="">
                <!-- NAVBAR -->
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand fs-4 ms-4" href="{{ route('user.dashboard') }}">DapoerNeda</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse me-5" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
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
        </div>
        <div class="container d-flex mt-5">
            <div class="col pull-right container d-flex justify-content-end mt-5">
                <h4>Gudang Resep Dapoer Neda</h4>
            </div>
            <div class="col container d-flex justify-content-start mt-5">
                <form action="#" class="col-auto ms-auto">
                    <div class="input-group">
                        <input type="text" name="search" value="{{ request()->search }}"
                        placeholder="Search" class="form-control">
                        <button class="btn btn-secondary" type="submit">
                            Cari Resep Disini
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="mt-5 mb-5 row gap-3">
                @foreach($products as $products)
                <div class="col-3 col-lg-3 card d-flex justify-content-center shadow-sm p-3 mb-5 bg-body-tertiary rounded" style="width: 18rem;">
                    <img class="rounded mx-auto d-block img-fluid" style="height: 350px;width:250px;" src="{{ asset('storage/thumbnail/'.$products->thumbnail) }}" class="card-img-top" alt="{{ $products->nama_resep }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $products->nama_resep }}</h5>
                        <p class="card-text">{{ $products->deskripsi }}</p>
                        <a href="{{ route('user.detail.resep',$products->id) }}" class="btn btn-primary">Lihat Resepnya</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>