<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benang extends Model
{
    use HasFactory;
    protected $table='benang';
    protected $fillable=[
        'kode_benang',
        'qty',
        'stok_sekarang',
        'stok_unit',
        'vendor_id',
        'style_id',
        'suplayer_id'
    
    
        ];
    public function BenangMasuk()
    {
        return $this->hasMany(BenangMasuk::class,'benang_id');
    }
    public function BenangKeluar()
    {
        return $this->hasMany(BenangKeluar::class,'benang_id');
    }
    public function vendor()
    {
        return $this->belongsTo(User::class);
    }
 
    public function style()
    {
        return $this->hasMany(StyleModel::class,'id','style_id');
    }
    public function suplayer()
    {
        return $this->belongsTo(Suplayer::class);
    }
    // public function benanglog()
    // {
    //     return $this->belongsToMany(BenangLog::class, 'Benanglog', 'benangmasuk_id', 'BenangKeluar_id');
    // }

}