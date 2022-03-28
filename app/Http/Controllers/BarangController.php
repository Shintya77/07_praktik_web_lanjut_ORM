<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function barang(){
        $data = Barang::all();
        return view('blog.barang',['title'=> 'Barang','daftar'=> $data]);
    }
}
