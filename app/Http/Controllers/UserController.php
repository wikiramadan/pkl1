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

        return redirect()->route('user2.index');
        
    }

    public function edit($id)
    {
        $user = User::findOrFail($id); 
        return view('user2.edit',compact('user'));  // Menampilkan form edit
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,  // Validasi unik, kecuali untuk data yang sedang diupdate
            'password' => 'nullable|min:6',  // Password opsional untuk update
            'alamat' => 'nullable|string',
        ]);

        // Menemukan user berdasarkan ID
        $user = User::findOrFail($id);

        // Memperbarui data user
        $user->name = $request->name;
        $user->email = $request->email;
        $user->alamat = $request->alamat;

        // Update password hanya jika diisi
        if ($request->password) {
            $user->password = bcrypt($request->password);  // Hash password
        }

        // Menyimpan perubahan ke database
        $user->save();

        Alert::success('Success', 'Data berhasil diUpdate');
        return redirect()->route('user2.index');
    }
    
    public function destroy($id)
    {
        $user = User::find($id);
        
        // Melakukan soft delete
        $user->delete();

        Alert::success('Success', 'Data berhasil di Hapus');
        return redirect()->route('user2.index');
    }
    

}