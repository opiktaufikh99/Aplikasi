<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suplayer extends Model
{
    use HasFactory;
    protected $table='suplayer';
    protected $fillable=[
        'nama',
        'kode_suplayer',
        'email',
        'no_tlpan'
    ];

}
