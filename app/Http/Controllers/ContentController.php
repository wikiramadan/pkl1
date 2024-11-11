<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    //
    public function index()
    {
        return view("ContentBerita.content");
    }

    public function tambahberita()
    {
        return view("ContentBerita.create");
    }
    
    public function detail2()
    {
        return view("Contentberita.detail2");
    }

    public function detail1()
    {
        return view("Contentberita.detail1");
    }

    

}