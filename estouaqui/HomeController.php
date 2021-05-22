<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
       $categorias = DB::table('categorias')->get();
        $noticiasTopBig = DB::table('noticias')->where('noticiatipo_id_tipo',1)->orderBy('created_at','desc')->first();
        $noticiasSub = DB::table('noticias')->where('noticiatipo_id_tipo',2)->orderBy('created_at','desc')->take(2)->get();
        $noticiasTopStory = DB::table('noticias')->where('noticiatipo_id_tipo',3)->orderBy('created_at','desc')->take(3)->get();
        $noticiasTopStoryFinal = DB::table('noticias')->where('noticiatipo_id_tipo',5)->orderBy('created_at','desc')->get();
        $publicidade = DB::table('publicidades')->get()->first();
        $noticias = DB::table('noticias')->get();
        
        $noticiaPrimeiro = DB::table('noticias')->where('categoria',3)->orderBy('created_at','desc')->take(4)->get();
        $noticiaSegundo = DB::table('noticias')->where('categoria',1)->orderBy('created_at','desc')->take(4)->get();
        $noticiaTerceiro = DB::table('noticias')->where('categoria',5)->orderBy('created_at','desc')->take(4)->get();
        
        return view('home.index',
                    ['noticiasSub'=>$noticiasSub,
                     'noticiaManing'=>$noticiaPrimeiro,
                     'noticiaPolitica'=>$noticiaSegundo,
                     'noticiaNews'=>$noticiaTerceiro,
                     'noticiasTopBig'=>$noticiasTopBig,
                     'publicidade'=>$publicidade,
                     'categorias'=>$categorias,
                     'topStory'=>$noticiasTopStory,
                     'noticias'=>$noticias,
                     'topStoryRead'=>$noticiasTopStoryFinal
                    ]
                );
    }
}
