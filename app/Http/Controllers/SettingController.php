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
        $settings = Setting::all(); // Ambil semua data dari database
        return view('setting2.index', ['settings' => $settings]); // Kirim data ke view
    }

}
