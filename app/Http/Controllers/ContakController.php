<?php

// app/Http/Controllers/NamaController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContakController extends Controller
{
    public function index()
    {
        
        return view('contak'); 
    }
}