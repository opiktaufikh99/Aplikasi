<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cutting_masuk extends Model
{
    use HasFactory;
    protected $table='cutting_masuk';
    protected $fillable=[
        'yard_cut',
        'roll_cut',
        'fabric_id'
    ];
}