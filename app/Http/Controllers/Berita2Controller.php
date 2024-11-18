<?php

namespace App\Http\Controllers;

use App\Models\Berita2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Berita2Controller extends Controller
{
    //
    public function index()
    {
        return view("berita1.index2");
    }

    public function berita2()
    {
        $data = array(
            'berita2s' => Berita2::all()
        );

        return view('berita2.index',$data);
    }
}
