<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resep;
use Illuminate\Support\Str;

class ResepController extends Controller
{
    public function index()
    {
        return view('user.user-dashboard');
    }

    public function create()
    {
        return view('user.user-create');
    }

    // public function store(Request $request)
    // {
    //     $data = $request->except('_token');
    //     $request->validate([
    //         'nama_resep'=>'required|string',
    //         'thumbnail' => 'required|image|mimes:jpeg,jpg,png',
    //         'vidio'=>'required|url',
    //         'deskripsi'=>'required|string',
    //         'postedby'=>'required|string',
    //         'alat'=>'required|string'
    //     ]);
        
    //     $thumbnail = $request->thumbnail;
    //     $thumbnailName = Str::random(10) . $thumbnail->getClientOriginalName();
    //     $thumbnail->storeAs('public/thumbnail', $thumbnailName);
    //     $data['thumbnail'] = $thumbnailName;
        
    //     Resep::create($data);

    //     return redirect()->route('admin.resep')->with('success','Resep Created');

    // }
}
