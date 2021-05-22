<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    public function index($cat_id)
    {
      $categorias = DB::table('categorias')->get();
        $categoriaActual = DB::table('categorias')->where('cat_id',$cat_id)
                                                  ->first();

        $noticiaBannerCat = DB::table('noticias')->where('noticiatipo_id_tipo',1)
                                               ->where('categoria',$cat_id)
                                               ->orderBy('created_at','desc')
                                               ->first();

        $noticiaTodosPrimeiro = DB::table('noticias')->where('noticiatipo_id_tipo','!=',1)
                                                ->where('categoria',$cat_id)
                                                ->orderBy('created_at','desc')
                                                ->take(4)
                                                ->get();


        $noticiaTodosTerceiro = DB::table('noticias')->where('noticiatipo_id_tipo','!=',1)
                                                    ->where('categoria',$cat_id)
                                                    ->orderBy('created_at','desc')
                                                    ->take(3)
                                                    ->get();


        $todasNoticias = DB::table('noticias')->where('categoria',$cat_id)
                                            ->orderBy('created_at','desc')
                                            ->get();

        return view('Page.read',[
                                  'categorias'=>$categorias,
                                  'menuActual'=>$categoriaActual,
                                  'noticiasCatBig'=> $noticiaBannerCat,
                                  'subBanner'=>$noticiaTodosPrimeiro,
                                  'terceiroBanner'=>$noticiaTodosTerceiro,
                                  'allNews'=>$todasNoticias
                                ]);

    }

    public function politic(){
        return view('Page.read');

    }

    public function contact(){
        $categorias = DB::table('categorias')->get();
        return view('Page.contact',['categorias'=>$categorias]);
    }

    public function about(){
        $categorias = DB::table('categorias')->get();
        return view('Page.about',['categorias'=>$categorias]);
    }

    public function privacy(){
        $categorias = DB::table('categorias')->get();
        return view('Page.privacy',['categorias'=>$categorias]);
    }

    public function termo(){
        $categorias = DB::table('categorias')->get();
        return view('Page.termo',['categorias'=>$categorias]);
    }

    public function artigo(){

        return view('Page.artigo');
    }
    
      public function logar(){
        $categorias = DB::table('categorias')->get();
        return view('Page.login',['categorias'=>$categorias]);
    }
    public function subscribe(){
        $categorias = DB::table('categorias')->get();
        return view('Page.subscribe',['categorias'=>$categorias]);
       
    }
      public function tabela(){

          $categorias = DB::table('categorias')->get();
        return view('Page.tabela',['categorias'=>$categorias]);
    }

    public function newslleter(){

  $categorias = DB::table('categorias')->get();
        return view('Page.newslleter',['categorias'=>$categorias]);   
        }
        
           public function registar(){
  $categorias = DB::table('categorias')->get();
        return view('Page.registar',['categorias'=>$categorias]);   
        }

}
