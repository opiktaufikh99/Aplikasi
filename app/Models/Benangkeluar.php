<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benangkeluar extends Model
{
    use HasFactory;
    protected $table='benang_keluar';
    
    public function Barang()
    {
        return $this->hasMany(Benang::class);
    }
    // public function BenangLog()
    // {
    //     return $this->belongsToMany(BenangLog::class, 'benanglog', 'benangmasuk_id', 'BenangKeluar_id');
    // }
}