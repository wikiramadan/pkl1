<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
class UserController extends Controller
{
    //
    // public function index()
    // {
    //     return view("user.index");
    // }

    public function user()
    {
        // $data = array(
        //     'users' => User::all()
        // );

        // queri get all
        $users= User::all();
        
        // query menggunakan where
        // $data = User::where('name','susi')->get();

        

        
        // quey mendapatkan data pertama
        //  $data= User::all()->first();
        //       echo $data->name;
            

        
        // dd($data);
        return view('user2.index',['users' => $users]);
    }

    public function create()
    {
        return view('user2.create'); // Pastikan view ini sesuai dengan lokasi file Blade Anda
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'alamat' => 'nullable|string',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>$request->password,
           'alamat' => $request->alamat,
        ]);

        Alert::success('Success', 'Data berhasil disimpan');
        // Alert::error('Gagal!', 'Ada kesalahan saat menyimpan data.');

        return redirect()->route('user2.index')->with('success', 'Pengguna berhasil ditambahkan.');
    }

}