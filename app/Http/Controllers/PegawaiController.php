<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function pegawai(){
        $data = pegawai::all();
        return view('blog.pegawai', ['title'=> 'Pegawai','isi' => $data]);
    }
}
