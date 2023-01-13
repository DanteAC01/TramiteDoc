<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;
    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
    public function movimientos(){
        return $this->hasMany(Movimiento::class);
    }
    public function tdocumento(){
        return $this->belongsTo(Tdocumento::class);
    }
}
