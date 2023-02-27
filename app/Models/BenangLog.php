<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BenangLog extends Model
{
    use HasFactory;
    protected $table='benanglog';
    public function benanglog()
    {
        return $this->belongsToMany(BenangLog::class, 'benanglog', 'benangmasuk_id', 'BenangKeluar_id');
    }
}