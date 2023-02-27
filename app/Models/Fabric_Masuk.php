<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabric_Masuk extends Model
{
    use HasFactory;
    protected $table='fabric_masuk';
    protected $fillable=[
    'roll',
    'yard',
    'stok_roll',
    'stok_yard',
    'fabric_id'];
 
    public function fabric()
    {
        return $this->belongsTo(Fabric::class);
    }
}