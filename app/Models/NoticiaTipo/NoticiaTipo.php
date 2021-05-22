<?php

namespace App\Models\NoticiaTipo;

use App\Models\Noticia\Noticia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class NoticiaTipo extends Model
{
    use HasFactory, Notifiable;


    protected $fillable = [
        'id_tipo',
        'nome_tipo',
    ];

    public function addNoticiaTipo(){
        return $this->hasMany(Noticia::class, 'noticiatipo_id_tipo', 'id_tipo');
    }
}
