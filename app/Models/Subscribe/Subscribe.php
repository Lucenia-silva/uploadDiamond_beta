<?php

namespace App\Models\Subscribe;

use App\Models\Usuario\Usuario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Subscribe extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'nome_sub',
        'valor'
    ];


}
