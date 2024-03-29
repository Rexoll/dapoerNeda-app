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
    <div class="container d-flex justify-content-center mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">
                            Halo, {{ auth()->user()->name }}
                        </h3>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{ route('user.resep.create') }}" class="btn btn-warning">Masukkan Resep</a>
                            </div>
                        </div>
                        @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <table id="resep" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>thumbnail</th>
                                            <th>nama_resep</th>
                                            <th>vidio</th>
                                            <th>deskripsi</th>
                                            <th>caraPembuatan</th>
                                            <th>postedby</th>
                                            <th>bahan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($reseps as $resep)
                                        <tr>
                                            <td>
                                                <img class="rounded mx-auto d-block" src="{{asset('storage/thumbnail/'.$resep->thumbnail)}}" width="50%">
                                            </td>
                                            <td>{{ $resep->nama_resep }}</td>
                                            <td>{{ $resep->vidio }}</td>
                                            <td>{{ $resep->deskripsi }}</td>
                                            <td>{{ $resep->cara_pembuatan }}</td>
                                            <td>{{ $resep->postedby }}</td>
                                            <td>{{ $resep->bahan }}</td>
                                            <td>
                                                <a href="{{route('user.resep.edit',$resep->id)}}" class="btn btn-secondary">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form method="post" action="{{route('user.resep.destroy',$resep->id)}}">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('js')
    <script>
        $('#resep').DataTable();
    </script>
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>