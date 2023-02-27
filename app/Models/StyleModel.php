<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StyleModel extends Model
{
    use HasFactory;
    protected $table='style';
    protected $fillable=[
        'style',
        'kode_style',
        'gambar',
        'color',
        'vendor_id'
    ];
    public function vendor()
    {
        return $this->belongsTo(VendorModel::class,'vendor_id','id');
    }
    public function buyer()
    {
        return $this->hasMany(BuyerModel::class, 'id','buyer_id');
    }

}
