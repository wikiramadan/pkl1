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
        $data = array(
            'users' => User::all()
        );
        
        return view('user2.index',$data);
    }
}