<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class List_Karyawan extends Model
{
    protected $connection = [
        'Nama',
        'Umur',
        'Alamat',
        'Notelp'
    ];
    use HasFactory;
}
