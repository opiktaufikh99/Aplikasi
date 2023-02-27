<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorModel extends Model
{
    use HasFactory;
    protected $table='Vendor';
    protected $fillable =[
        'name',
        'email',
        'no_tlpan',
        'alamat',
        'buyer_id',
      ];
      public $timestamps = false;

    public function buyer()
    {
        return $this->belongsTo(BuyerModel::class);
    }
}