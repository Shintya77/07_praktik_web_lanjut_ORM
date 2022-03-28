<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Supplier;

class SupplierController extends Controller
{
    public function supplier(){
        $data = supplier::all();
        return view('blog.supplier', ['title'=> 'Supplier' , 'isi' => $data]);
    }

    public function supplier1(){
        $data = supplier::paginate(3);
        return view('blog.supplier',['title'=> 'Supplier','isi'=> $data]);
    }

}
