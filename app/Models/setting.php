<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    use HasFactory;
    protected $fillable =[
        'logo','gambarheader','gambarprofil1','gambarprofil2','namaprofil1','namaprofil2',
    ];
}
