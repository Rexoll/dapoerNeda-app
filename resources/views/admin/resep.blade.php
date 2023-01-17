@extends('admin.layouts.base')
@section('title','Resep')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Resep</h3>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ route('admin.resep.create') }}" class="btn btn-warning">Masukkan Resep</a>
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
                                    <th>Id</th>
                                    <th>thumbnail</th>
                                    <th>nama_resep</th>
                                    <th>vidio</th>
                                    <th>deskripsi</th>
                                    <th>alat</th>
                                    <th>postedby</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reseps as $resep)
                                <tr>
                                    <td>{{ $resep->id }}</td>
                                    <td>
                                        <img src="{{asset('storage/thumbnail/'.$resep->thumbnail)}}" width="50%">
                                    </td>
                                    <td>{{ $resep->nama_resep }}</td>
                                    <td>{{ $resep->vidio }}</td>
                                    <td>{{ $resep->deskripsi }}</td>
                                    <td>{{ $resep->alat }}</td>
                                    <td>{{ $resep->postedby }}</td>
                                    <td>
                                        <a href="{{route('admin.resep.edit',$resep->id)}}" class="btn btn-secondary">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form method="post" action="{{route('admin.resep.destroy',$resep->id)}}">
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
@endsection

@section('js')
<script>
    $('#resep').DataTable();
</script>
@endsection