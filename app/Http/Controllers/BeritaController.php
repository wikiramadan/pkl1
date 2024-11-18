<?php

namespace App\Http\Controllers;

use App\Models\Berita;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    //
    public function index()
    {
        return view('berita.index',);
    }

    public function show()
    {
        return view('berita.show',);

    }

    public function detail2()
    {
        return view('berita.detail2',);

    }

    public function detail3()
    {
        return view('berita.detail3',);

    }

    public function detail4()
    {
        return view('berita.detail4',);

    }

    public function detail5()
    {
        return view('berita.detail5',);

    }

    public function detail6()
    {
        return view('berita.detail6',);

    }

    public function create()
    {
        return view('berita.create');
    }

    public function data()
    {
        $beritas = Berita::all(); // Ambil semua data dari database
        return view('berita2.index', ['beritas' => $beritas]); // Kirim data ke view
    }


}
