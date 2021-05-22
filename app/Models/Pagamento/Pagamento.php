<?php

namespace App\Models\Pagamento;

use App\Models\Usuario\Usuario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Pagamento extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'tipo_pagamento',
        'id_usuario',
        'valor',
    ];

    public function addusuario(){
        return $this->hasOne(Usuario::class,'id_usuario','id_usuario');
    }
}
