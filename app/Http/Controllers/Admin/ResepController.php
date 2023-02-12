<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use App\Models\Resep;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ResepController extends Controller
{
    public function index()
    {
        $reseps = Resep::all();
        return view('admin.resep', ['reseps' => $reseps]);
    }

    public function create()
    {
        return view('admin.resep-create');
    }
    
    public function edit($id)
    {
        $resep = Resep::find($id);
        return view('admin.resep-edit',['resep'=>$resep]);
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $request->validate([
            'nama_resep'=>'required|string',
            'thumbnail' => 'required|image|mimes:jpeg,jpg,png',
            'vidio'=>'required|url',
            'deskripsi'=>'required|string',
            // 'postedby'=>'required|string',
<<<<<<< HEAD
            'cara_pembuatan'=>'required|string',
            'bahan'=>'required|string'
=======
            'alat'=>'required|string',
            'kategori'=>'required|string'
>>>>>>> 1b0c4141d8a8a291cd3dc76bed485e353dea7580
        ]);
        
        $thumbnail = $request->thumbnail;
        $thumbnailName = Str::random(10) . $thumbnail->getClientOriginalName();
        $thumbnail->storeAs('public/thumbnail', $thumbnailName);
        $data['thumbnail'] = $thumbnailName;
        $data['postedby'] = auth()->user()->name;

        
        $data['postedby'] = auth()->user()->name;
        Resep::create($data);

        return redirect()->route('admin.resep')->with('success','Resep Created');

    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
        $request->validate([
            'nama_resep'=>'required|string',
            // 'thumbnail' => 'required|image|mimes:jpeg,jpg,png',
            'vidio'=>'required|url',
            'deskripsi'=>'required|string',
<<<<<<< HEAD
            'cara_pembuatan'=>'required|string',
            // 'postedby'=>'required|string',
            'bahan'=>'required|string'
=======
            'alat'=>'required|string',
            // 'postedby'=>'required|string',
            'kategori'=>'required|string'
>>>>>>> 1b0c4141d8a8a291cd3dc76bed485e353dea7580
        ]);

        $resep = Resep::find($id);
        if ($request->thumbnail) {
            $thumbnail = $request->thumbnail;
            $thumbnailName = Str::random(10) . $thumbnail->getClientOriginalName();
            $thumbnail->storeAs('public/thumbnail', $thumbnailName);
            $data['thumbnail'] = $thumbnailName;

            Storage::delete('public/thumbnail/'.$resep->thumbnail);
        }

        $resep->update($data);
        return redirect()->route('admin.resep')->with('success','Resep Edited');

    }

    public function destroy($id)
    {
        Resep::find($id)->delete();
        return redirect()->route('admin.resep')->with('success','Resep Deleted');

    }
}
