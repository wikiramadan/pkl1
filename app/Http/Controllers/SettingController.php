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
        $settings = Setting::all();

        return view('setting2.index', ['settings' => $settings]);
    }


    public function edit($id)
    {
        $setting = Setting::findOrFail($id);

        return view('setting2.edit', ['setting' => $setting]);
    }



// public function updateAll(Request $request)
// {
//     foreach ($request->ids as $id) {
//         $setting = Setting::find($id);

//         if ($setting) {
//             $setting->logo = $request->logo[$id] ?? $setting->logo;
//             $setting->gambarheader = $request->gambarheader[$id] ?? $setting->gambarheader;
//             $setting->gambarprofil1 = $request->gambarprofil1[$id] ?? $setting->gambarprofil1;
//             $setting->gambarprofil2 = $request->gambarprofil2[$id] ?? $setting->gambarprofil2;
//             $setting->namaprofil1 = $request->namaprofil1[$id] ?? $setting->namaprofil1;
//             $setting->namaprofil2 = $request->namaprofil2[$id] ?? $setting->namaprofil2;

//             $setting->save();
//         }
//     }

//     return redirect()->route('setting2.index')->with('success', 'Data berhasil diperbarui!');
// }



public function update(Request $request)
{
    foreach ($request->id as $key => $id) {
        $setting = Setting::findOrFail($id);

        $setting->logo = $request->logo[$id] ?? null;
        $setting->gambarheader = $request->gambarheader[$id] ?? null;
        $setting->gambarprofil1 = $request->gambarprofil1[$id] ?? null;
        $setting->gambarprofil2 = $request->gambarprofil2[$id] ?? null;
        $setting->namaprofil1 = $request->namaprofil1[$id] ?? null;
        $setting->namaprofil2 = $request->namaprofil2[$id] ?? null;

        $setting->save();
    }

    return redirect()->route('setting2.index')->with('success', 'Data berhasil diperbarui!');
}



}
