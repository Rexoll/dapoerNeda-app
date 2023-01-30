<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resep;
use GuzzleHttp\Psr7\Query;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ResepController extends Controller
{
    public function index()
    {
        return view('user.user-dashboard');
    }

    public function products(Request $request)
    {
        $search = $request->search;
        $products = Resep::when($search, function ($query, $search) {
            return $query->where('nama_resep', 'like', "%{$search}%");
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
            'vidio' => 'required|url',
            'thumbnail' => 'required|image|mimes:jpeg,jpg,png',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string',
            'alat' => 'required|string',
        ]);

        $thumbnail = $request->thumbnail;
        $thumbnailName = Str::random(10) . $thumbnail->getClientOriginalName();
        $thumbnail->storeAs('public/thumbnail', $thumbnailName);
        $data['thumbnail'] = $thumbnailName;

        $data['postedby'] = auth()->user()->name;
        Resep::create($data);

        return redirect()->route('profile')->with('success', 'Resep Created');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('user.daftar.products');
    }

    public function profile()
    {
        $resep = Resep::where('postedby', Auth::user()->name)->paginate(25);
        return view('user.profile', ['reseps' => $resep]);
    }

    public function edit($id)
    {
        $resep = Resep::find($id);
        return view('user.user-update', ['resep' => $resep]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
        $request->validate([
            'nama_resep' => 'required|string',
            'thumbnail' => 'image|mimes:jpeg,jpg,png',
            'vidio' => 'required|url',
            'deskripsi' => 'required|string',
            'alat' => 'required|string',
            'kategori' => 'required|string'
        ]);

        $resep = Resep::find($id);
        if ($request->thumbnail) {
            $thumbnail = $request->thumbnail;
            $thumbnailName = Str::random(10) . $thumbnail->getClientOriginalName();
            $thumbnail->storeAs('public/thumbnail', $thumbnailName);
            $data['thumbnail'] = $thumbnailName;

            $data['postedby'] = auth()->user()->name;
            Storage::delete('public/thumbnail/' . $resep->thumbnail);
        }

        $resep->update($data);
        return redirect()->route('profile')->with('success', 'Resep Edited');
    }

    public function destroy($id)
    {
        Resep::find($id)->delete();
        return redirect()->route('profile')->with('success', 'Resep Deleted');
    }
}
