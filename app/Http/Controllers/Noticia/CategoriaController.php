<?php

namespace App\Http\Controllers\Noticia;

use App\Http\Controllers\Controller;
use App\Models\Categoria\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    public function index(){
        $categorias = DB::table('categorias')->get();

        return view('admin.dashboard.listarcat',['categorias'=>$categorias]);
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'categoria' => 'required|max:255',
            'status'=>'required'
        ]);

        $st = intval($request->status);

        Categoria::create([
            'titulo'=>$request->categoria,
            'statusCat'=>$st
        ]);

        return redirect()->route('listarCategoria');
    }

    public function editarCategoria($id){
        $categorias = DB::table('categorias')->where('cat_id',$id)->first();

        return view('admin.dashboard.editarCategoria', compact('categorias'));
    }

    public function editarCategory(Request $request){
        $tipoUpdate = DB::table('categorias')
                      ->where('cat_id', $request->id)
                      ->update(['titulo'=>$request->categoria, 'statusCat'=>$request->status]);
        return redirect()->route('listarCategoria');
    }
}
