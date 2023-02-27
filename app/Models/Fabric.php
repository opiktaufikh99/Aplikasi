<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabric extends Model
{
    use HasFactory;
    protected $table='fabric';
    protected $fillable=[
        'kode_fabric',
        'stok_roll',
        'stok_yard',
        'color',
        'style_id',
        'vendor_id',
        'suplayer_id'
    ];
    public function vendor()
    {
        return $this->belongsTo(VendorModel::class);
    }
    public function suplayer()
    {
        return $this->belongsTo(Suplayer::class);
    }
    public function style()
    {
        return $this->belongsTo(StyleModel::class);
    }
    public function Fabric_masuk()
    {
        return $this->hasMany(Fabric_Masuk::class, 'fabric_id', 'id');
    }
    public function Fabric_keluar()
    {
        return $this->hasMany(Fabric_Keluar::class, 'fabric_id', 'id');
    }
}