<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use App\Models\Resep;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;

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
        return view('admin.resep-edit', ['resep' => $resep]);
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $request->validate([
            'nama_resep' => 'required|string',
            'thumbnail' => 'required|image|mimes:jpeg,jpg,png',
            'vidio' => 'required|url',
            'deskripsi' => 'required|string',
            // 'postedby'=>'required|string',
            'cara_pembuatan' => 'required|string',
            'bahan' => 'required|string'
        ]);

        $request->file('thumbnail');
        $image = $request->file('thumbnail');
        $nameGen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(400, 400)->save('upload/foodsthumbnail/' . $nameGen);
        $saveUrl = 'http://dapoerneda.my.id/upload/foodsthumbnail/' . $nameGen;
        $data['thumbnail'] = $saveUrl;
        $data['postedby'] = auth()->user()->name;

        Resep::create($data);

        return redirect()->route('admin.resep')->with('success', 'Resep Created');
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
        $request->validate([
            'nama_resep' => 'required|string',
            'thumbnail' => 'required|image|mimes:jpeg,jpg,png',
            'vidio' => 'required|url',
            'deskripsi' => 'required|string',
            'cara_pembuatan' => 'required|string',
            'postedby' => 'required|string',
            'bahan' => 'required|string'
        ]);

        $resep = Resep::find($id);
        if ($request->file('thumbnail')) {
            $image = $request->file('thumbnail');
            $nameGen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(400, 400)->save('upload/foodsthumbnail/' . $nameGen);
            $saveUrl = 'http://dapoerneda.my.id/upload/foodsthumbnail/' . $nameGen;
            $data['thumbnail'] = $saveUrl;
            $data['postedby'] = auth()->user()->name;
        }

        $resep->update($data);
        return redirect()->route('admin.resep')->with('success', 'Resep Edited');
    }

    public function destroy($id)
    {
        Resep::find($id)->delete();
        return redirect()->route('admin.resep')->with('success', 'Resep Deleted');
    }
}
