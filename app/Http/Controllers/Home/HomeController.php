<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $categorias = DB::table('categorias')->get();
        $noticiasTopBig = DB::table('noticias')->where('noticiatipo_id_tipo',1)->first();
        $noticias = DB::table('noticias')->where('noticiatipo_id_tipo',1)->get();
        $publicidade = DB::table('publicidades')->get()->first();


        return view('home.index',
                    ['noticias'=>$noticias,
                     'noticiasTopBig'=>$noticiasTopBig,
                     'publicidade'=>$publicidade,
                     'categorias'=>$categorias
                    ]
                );
    }

    public function menuData(){
        return view('menupage.index');
    }
}
