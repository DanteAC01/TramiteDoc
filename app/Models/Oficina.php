<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Oficina extends Model
{
    use HasFactory;
    public function user(){
        return $this->hasMany(User::class);
    }
    public function movimientos(){
        return $this->hasMany(Movimiento::class);
    }
}
