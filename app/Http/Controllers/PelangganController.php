<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function pelanggan(){
        $data = Pelanggan::all();
        return view('blog.pelanggan',['title'=> 'Pelanggan','daftar'=> $data]);
    }
    public function pelanggan1(){
        $data = Pelanggan::paginate(3);
        return view('blog.pelanggan',['title'=> 'Pelanggan','daftar'=> $data]);
    }
}
