<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabric_Keluar extends Model
{
    use HasFactory;
    protected $table='fabric_keluar';
    protected $fillable =['
    fabric_id',
    'yard',
    'roll'];

    public function fabric()
    {
        return $this->belongsTo(Fabric::class);
    }
}