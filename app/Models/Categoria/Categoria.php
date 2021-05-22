<?php

namespace App\Models\Categoria;

use App\Models\Noticia\Noticia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Categoria extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo',
        'statusCat',
    ];


    public function addNoticia(){
        return $this->hasOne(Noticia::class,  'categoria', 'cat_id');
    }
}

