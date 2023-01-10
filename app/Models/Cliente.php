<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    public function documento(){
        return $this->hasMany(Documento::class);
    }
    public function movimiento(){
        return $this->hasMany(Movimiento::class);
    }
}
