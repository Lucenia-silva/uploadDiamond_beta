<?php

namespace App\Http\Controllers\Noticia;

use App\Http\Controllers\Controller;
use App\Models\Categoria\Categoria;
use App\Models\Noticia\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoticiaController extends Controller
{
    public function index()
    {
        $noticias = DB::table('noticias')->get();

        return view('admin.dashboard.listarnoticia', ['noticias' => $noticias]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'short' => 'required',
            'catNoticia' => 'required',
            'tipoNoticia' => 'required',
            'imageNoticia' => 'required',
            'fulltexto' => 'required',
            'artigo'=>'required'
        ]);

        $imageNoticia = $request->file('imageNoticia');
        $imageNoticiaNome = time() . '.' . $imageNoticia->extension();
        $imageNoticia->move(public_path('images'), $imageNoticiaNome);

        if (auth()->user()->id != null) {
            $id = intval(auth()->user()->id);

            Noticia::create([
                'noticiatipo_id_tipo' => $request->tipoNoticia,
                'titulo' => $request->title,
                'artigo'=>$request->artigo,
                'news_short_description' => $request->short,
                'image_noticia' => $imageNoticiaNome,
                'categoria' => $request->catNoticia,
                'user' => $id,
                'news_full_content' => $request->fulltexto

            ]);

            return redirect()->route('listarNoticia');
        }
    }


    public function editarNoticia($id)
    {
        $categorias = DB::table('categorias')->get();
        $tipos = DB::table('noticia_tipos')->get();

        $noticias = DB::table('noticias')->where('noticia_id', $id)->first();

        return view('admin.dashboard.editarNoticia', ['categorias' => $categorias, 'tipos' => $tipos], compact('noticias'));
    }

    public function editarNews(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'short' => 'required',
            'catNoticia' => 'required',
            'tipoNoticia' => 'required',
            'imageNoticia' => 'required',
            'fulltexto' => 'required',
            'artigo'=>'required'
        ]);

        if (auth()->user()->id != null) {
            $imageNoticia = $request->file('imageNoticia');
            $imageNoticiaNome = time() . '.' . $imageNoticia->extension();
            $imageNoticia->move(public_path('images'), $imageNoticiaNome);
            $id = intval(auth()->user()->id);

            $tipoUpdate = DB::table('noticias')
                ->where('noticia_id', $request->id)
                ->update([
                    'titulo' => $request->title,
                    'artigo'=>$request->artigo,
                    'news_short_description' => $request->short,
                    'image_noticia' => $imageNoticiaNome,
                    'categoria' => $request->catNoticia,
                    'noticiatipo_id_tipo' => $request->tipoNoticia,
                    'news_full_content' => $request->fulltexto,
                    'user' => $id
                ]);

            return redirect()->route('listarNoticia');
        }
    }
}

//Banner Header Home - Automático
