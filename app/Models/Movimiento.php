<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    use HasFactory;
    public function documento(){
        return $this->belongsTo(Documento::class);
    }
    public function oficinas(){
        return $this->hasMany(Oficina::class);
    }
}
