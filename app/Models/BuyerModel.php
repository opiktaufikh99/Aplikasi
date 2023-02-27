<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyerModel extends Model
{
    use HasFactory;
    protected $table='buyer';
    protected $fillable = [
        'username',
        'name',
        'email',
        'no_tlpan',
        'alamat'];
       public function vendor()
       {
           return $this->belongsTo(VendorModel::class);
       }
}
