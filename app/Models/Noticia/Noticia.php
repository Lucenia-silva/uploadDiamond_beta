<?php

namespace App\Models\Noticia;

use App\Models\Categoria\Categoria;
use App\Models\NoticiaTipo\NoticiaTipo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Noticia extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'categoria_cat_id',
        'noticiatipo_id_tipo',
        'titulo',
        'artigo',
        'news_short_description',
        'news_full_content',
        'image_noticia',
        'user',
        'categoria'
    ];

    public function addUser(){
        return $this->belongsTo(User::class, 'user', 'id_user');
    }

    public function addTipo(){
        return $this->belongsTo(NoticiaTipo::class, 'noticiatipo_id_tipo', 'id_tipo');
    }

}
