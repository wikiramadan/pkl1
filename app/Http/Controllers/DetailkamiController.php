<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailkamiController extends Controller
{
    public function detailWiki()
    {
        return view('detail.wiki');  
    }

    public function detailAfifi()
    {
        return view('detail.afifi');  
    }
}
