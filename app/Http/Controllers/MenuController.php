<?php

namespace App\Http\Controllers;
use App\Models\Barang;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        return view('index');
    }

    public function katalog(){
        $databarang = Barang::all();
        return view('katalog',compact('databarang'));
    }

    public function about(){
        return view('about');
    }
}
