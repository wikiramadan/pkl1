<?php

namespace App\Http\Controllers;

use App\Models\Kabar;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KabarController extends Controller
{
    public function index()
    {
        $kabars = Kabar::all();
        return view('kabar.index', compact('kabars'));
    }

    public function create()
    {
        return view('kabar.create');
    }

    public function data()
    {
        $kabars = Kabar::all();
        return view('kabar.index', ['kabars' => $kabars]);
    }

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

            Alert::success('Berhasil!', 'Data kabar berhasil disimpan.');
            return redirect()->route('kabar.index')->with('success', 'Kabar berhasil ditambahkan.');
        } catch (\Exception $e) {
            Alert::error('Gagal!', 'Ada kesalahan saat menyimpan data: ' . $e->getMessage());
            return back()->withInput();
        }
    }

    public function edit($id)
    {
        $kabar = Kabar::findOrFail($id);

        return view('kabar.edit', compact('kabar'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judulberita' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'lokasi' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        try {
            $kabar = Kabar::findOrFail($id);

            if ($request->hasFile('gambar')) {
                $gambarPath = $request->file('gambar')->store('images', 'public');
                $kabar->gambar = $gambarPath;
                if ($gambarPath) {
                    if ($kabar->gambar && file_exists(storage_path('app/public/' . $kabar->gambar))) {
                        unlink(storage_path('app/public/' . $kabar->gambar));
                    }
                }
            }


            $kabar->judulberita = $request->judulberita;
            $kabar->lokasi = $request->lokasi;
            $kabar->deskripsi = $request->deskripsi;
            $kabar->save();

            return redirect()->route('kabar.index')->with('success', 'Kabar berhasil diperbarui.');
        } catch (\Exception $e) {
            return back()->with('error', 'Gagal memperbarui kabar: ' . $e->getMessage());
        }
    }


    public function destroy($id)
    {
        try {
            $kabar = Kabar::findOrFail($id);

            if ($kabar->gambar && file_exists(storage_path('app/public/' . $kabar->gambar))) {
                unlink(storage_path('app/public/' . $kabar->gambar));
            }

            $kabar->delete();

            return redirect()->route('kabar.index')->with('success', 'Kabar berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->route('kabar.index')->with('error', 'Gagal menghapus kabar: ' . $e->getMessage());
        }
    }

}
