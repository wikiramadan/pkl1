<?php

namespace App\Http\Controllers;

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

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul_berita' => 'required|max:255',
            'gambar_berita' => 'required',
            'tanggal_berita' => 'required',
            'deskripsi_berita' => 'required',
        ]);

        // Simpan data berita di sesi
        $berita = [
            'judul_berita' => $request->judul_berita,
            'gambar_berita' => $request->gamabar_berita,
            'tanggal_berita' => $request->tanggal_berita,
            'deskripsi_berita' => $request->deskripsi_berita,
        ];

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan');
    }


}