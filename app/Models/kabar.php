<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kabar extends Model
{
    use HasFactory;
    protected $fillable =[
        'judulberita','gambar','lokasi','deskripsi',
    ];
}
