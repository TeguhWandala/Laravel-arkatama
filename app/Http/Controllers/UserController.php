<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function tampilkan(){
        return view ('tampil');
    }

    public function tambahkan(){
        return view ('tambah');
    }

    public function editkan(){
        return view('edit');
    }
    public function detailkan(){
        return view('detail');
    }
}