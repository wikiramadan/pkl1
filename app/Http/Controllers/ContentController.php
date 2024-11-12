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
        return view("ContentBerita.detail2");
    }

    public function detail1()
    {
        return view("ContentBerita.detail1");
    }

    public function detail3()
    {
        return view("ContentBerita.detail3");
    }

    public function detail4()
    {
        return view("ContentBerita.detail4");
    }

    public function detail5()
    {
        return view("ContentBerita.detail5");
    }

    public function detail6()
    {
        return view("ContentBerita.detail6");
    }



}