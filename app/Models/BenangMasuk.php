<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BenangMasuk extends Model
{
    use HasFactory;
    protected $table='benang_masuk';
    protected $fillable=['
    qty',
    'benang_id'];
    public function Benang()
    {
        return $this->belongsTo(Benang::class,'benang_id','id');
    }
}