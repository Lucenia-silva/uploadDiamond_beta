<?php

namespace App\Models\Usuario;

use App\Models\Subscribe\Subscribe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Usuario extends Model
{
    use HasFactory, Notifiable;


    protected $fillable = [
        'id_usuario',
        'id_subs',
        'primeiro_nome',
        'ultimo_nome',
        'telefone',
        'email',
        'password',

    ];

    public function addsubscribe()
    {
        return $this->hasOne(Subscribe::class, 'id_subs','id_subscribe');
    }

}
