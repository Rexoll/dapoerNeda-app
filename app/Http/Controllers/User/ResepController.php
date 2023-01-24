<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resep;
use GuzzleHttp\Psr7\Query;
use Illuminate\Support\Str;

class ResepController extends Controller
{
    public function index()
    {
        return view('user.user-dashboard');
    }
    
    public function products(Request $request)
    {
        $search = $request->search;
        $products = Resep::when($search,function($query,$search){
            return $query->where('nama_resep','like',"%{$search}%");
        })->paginate();
        return view('user.daftar-resep', ['products' => $products]);
    }

    public function detail($id)
    {
        $resep = Resep::find($id);
        return view('user.user-detail', ['resep' => $resep]);
    }


    public function create()
    {
        return view('user.user-create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $request->validate([
            'nama_resep' => 'required|string',
            'thumbnail' => 'required|image|mimes:jpeg,jpg,png',
            'vidio' => 'required|url',
            'deskripsi' => 'required|string',
            'postedby' => 'required|string',
            'alat' => 'required|string',
            'kategori' => 'required|string'
        ]);

        $thumbnail = $request->thumbnail;
        $thumbnailName = Str::random(10) . $thumbnail->getClientOriginalName();
        $thumbnail->storeAs('public/thumbnail', $thumbnailName);
        $data['thumbnail'] = $thumbnailName;

        Resep::create($data);

        return redirect()->route('user.daftar.products');
    }
}
