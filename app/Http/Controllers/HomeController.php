<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;


class HomeController extends Controller
{
    public function index()
    {
        // Membaca data kabar dari file JSON
        if (Storage::disk('local')->exists('kabars.json')) {
            $kabars = json_decode(Storage::disk('local')->get('kabars.json'), true);
        } else {
            $kabars = []; // Jika file tidak ada, set kabars kosong
        }

        $kabars = Cache::get('kabars', []);

        return view('home.index', compact('kabars'));
    }
}


