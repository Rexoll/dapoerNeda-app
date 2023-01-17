<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use App\Models\Resep;

class ResepController extends Controller
{
    public function index()
    {
        $resep = Resep::all();
        return view('admin.resep',['resep'=>$resep]);
    }

    public function create()
    {
        return view('admin.resep-create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $request->validate([
            'nama_resep'=>'required|string',
            'vidio'=>'required|url',
            'deskripsi'=>'required|string',
            'alat'=>'required|string'
        ]);
        
        Resep::create($data);

        return redirect()->route('admin.resep')->with('success','Resep Created');

    }
}
