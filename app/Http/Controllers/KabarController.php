<?php

namespace App\Http\Controllers;

use App\Models\Kabar;
use Illuminate\Http\Request;

class KabarController extends Controller
{
    // API untuk mendapatkan data kabar dalam format JSON
    public function getKabars()
    {
        $kabars = Kabar::all();
        return response()->json($kabars);
    }

    // Menampilkan semua kabar
    public function index()
    {
        $kabars = Kabar::all();
        return view('kabar.index', compact('kabars'));
    }

    // Form untuk menambahkan kabar baru
    public function create()
    {
        return view('kabar.create');
    }

    // Menyimpan kabar baru
    public function store(Request $request)
    {
        $request->validate([
            'judulberita' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'lokasi' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        try {
            $gambarPath = $request->file('gambar')->store('images', 'public');

            Kabar::create([
                'judulberita' => $request->judulberita,
                'gambar' => $gambarPath,
                'lokasi' => $request->lokasi,
                'deskripsi' => $request->deskripsi,
            ]);

            // Flash message using Laravel's session
            return redirect()->route('kabar.index')->with('status', 'Kabar berhasil ditambahkan!');
        } catch (\Exception $e) {
            return back()->with('status', 'Gagal menambahkan kabar: ' . $e->getMessage());
        }
    }


    // Mengedit kabar
    public function edit($id)
    {
        $kabar = Kabar::findOrFail($id);
        return view('kabar.edit', compact('kabar'));
    }

    // Memperbarui kabar
    public function update(Request $request, $id)
    {
        $request->validate([
            'judulberita' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'lokasi' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        $kabar = Kabar::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('images', 'public');
            $kabar->gambar = $gambarPath;
        }

        $kabar->judulberita = $request->judulberita;
        $kabar->lokasi = $request->lokasi;
        $kabar->deskripsi = $request->deskripsi;
        $kabar->save();

        return redirect()->route('kabar.index')->with('success', 'Kabar berhasil diperbarui.');
    }

    // Menghapus kabar
    public function destroy($id)
    {
        $kabar = Kabar::findOrFail($id);
        if ($kabar->gambar && file_exists(storage_path('app/public/' . $kabar->gambar))) {
            unlink(storage_path('app/public/' . $kabar->gambar));
        }
        $kabar->delete();

        return redirect()->route('kabar.index')->with('success', 'Kabar berhasil dihapus.');
    }
}
