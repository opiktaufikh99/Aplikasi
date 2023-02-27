<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cutting_keluar extends Model
{
    use HasFactory;
    protected $table='cutting_keluar';
    protected $fillable=['
    kode_cutting',
    'nama',
    'cutting_masuk',
    'stok_roll',
    'stok_yard',

];
}