<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
      $noticias = DB::table('noticias')->get();

      return view('admin.dashboard.index',compact('noticias'));
    }

    public function indexCategoria()
    {
        return view('admin.dashboard.formcat');
    }
    public function indexTipo()
    {
        return view('admin.dashboard.formtype');
    }

    public function indexNoticia()
    {
        $categorias = DB::table('categorias')->get();
        $tipos = DB::table('noticia_tipos')->get();
        return view('admin.dashboard.formnoticia',['categorias' => $categorias, 'tipos'=>$tipos]);
    }
}
