<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    public function index()
    {
        return view('admin.resep');
    }

    public function create()
    {
        return view('admin.resep-create');
    }
}
