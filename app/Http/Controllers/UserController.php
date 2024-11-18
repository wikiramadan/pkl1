<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index()
    {
        return view("user.index");
    }

    public function user()
    {
        // $data = array(
        //     'users' => User::all()
        // );

        // queri get all
        $data= User::all();
        
        // query menggunakan where
        // $data = User::where('name','susi')->get();

        

        
        // quey mendapatkan data pertama
        //  $data= User::all()->first();
        //       echo $data->name;
            

        
        // dd($data);
        return view('user2.index',['users' => $data]);
    }
}