<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


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

    // cretae tbel
    public function createe()
    {
        return view('berita.create');
    }

    public function data()
    {
        $beritas = Berita::all();
        return view('berita2.index', ['beritas' => $beritas]);
    }


    public function create()
    {
        return view('berita2.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judulberita' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'lokasi' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        // Upload gambar
        $gambarPath = $request->file('gambar')->store('images', 'public');

        // Simpan data ke database
        Berita::create([
            'judulberita' => $request->judulberita,
            'gambar' => $gambarPath,
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi,
        ]);


        Alert::success('Success', 'Data berhasil disimpan');
        Alert::error('Gagal!', 'Ada kesalahan saat menyimpan data.');


        return redirect()->route('berita2.index')->with('success', 'Berita berhasil ditambahkan.');
    }



}
