<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    //
    public function index()
    {
        $setting = Setting::first();
        return view('setting2.index', compact('setting'));
    }


    public function edit($id)
    {
        $setting = Setting::findOrFail($id);

        return view('setting2.edit', ['setting' => $setting]);
    }


    public function update(Request $request, $id)
{
    // Validasi input teks dan gambar
    $request->validate([
        'namaprofil1' => 'nullable|string|max:255',
        'namaprofil2' => 'nullable|string|max:255',
        'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'gambarheader' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'gambarprofil1' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'gambarprofil2' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    // Cari data setting berdasarkan ID
    $setting = Setting::findOrFail($id);

    // Update teks jika ada perubahan
    $setting->namaprofil1 = $request->namaprofil1;
    $setting->namaprofil2 = $request->namaprofil2;

    // Update gambar jika ada perubahan
    if ($request->hasFile('logo')) {
        $setting->logo = $request->file('logo')->store('logos', 'public');
    }

    if ($request->hasFile('gambarheader')) {
        $setting->gambarheader = $request->file('gambarheader')->store('header_images', 'public');
    }

    if ($request->hasFile('gambarprofil1')) {
        $setting->gambarprofil1 = $request->file('gambarprofil1')->store('profile_images', 'public');
    }

    if ($request->hasFile('gambarprofil2')) {
        $setting->gambarprofil2 = $request->file('gambarprofil2')->store('profile_images', 'public');
    }

    // Simpan perubahan
    $setting->save();

    return redirect()->route('setting.edit', $id)->with('success', 'Pengaturan berhasil diperbarui!');
}





}
