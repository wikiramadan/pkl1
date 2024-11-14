<?php

namespace App\Http\Controllers;

use App\Models\Berita2;
use Illuminate\Http\Request;

class Berita2Controller extends Controller
{
    // Menampilkan semua berita2
    public function index()
    {
        $berita2s = Berita2::all();
        return view('berita2.index', compact('berita2s'));
    }

    // Menampilkan form untuk menambah berita2
    public function create()
    {
        return view('berita2.create');
    }

    // Menyimpan berita2 baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'judulberita' => 'required|string|max:255',
            'gambar' => 'nullable|string|max:255',
            'lokasi' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        Berita2::create([
            'judulberita' => $request->judulberita,
            'gambar' => $request->gambar,
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('berita2.index')->with('success', 'berita2 berhasil ditambahkan!');
    }

    // Menampilkan form untuk mengedit berita2
    public function edit($id)
    {
        $berita2 = Berita2::findOrFail($id);
        return view('berita2.edit', compact('berita2'));
    }

    // Memperbarui berita2 yang ada
    public function update(Request $request, $id)
    {
        $request->validate([
            'judulberita' => 'required|string|max:255',
            'gambar' => 'nullable|string|max:255',
            'lokasi' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $berita2 = Berita2::findOrFail($id);
        $berita2->update([
            'judulberita' => $request->judulberita,
            'gambar' => $request->gambar,
            'lokasi' => $request->lokasi,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('berita2.index')->with('success', 'berita2 berhasil diperbarui!');
    }

    // Menghapus berita2
    public function destroy($id)
    {
        $berita2 = Berita2::findOrFail($id);
        $berita2->delete();

        return redirect()->route('berita2.index')->with('success', 'berita2 berhasil dihapus!');
    }
}
