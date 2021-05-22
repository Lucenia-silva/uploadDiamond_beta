<?php

namespace App\Http\Controllers\Noticia;

use App\Http\Controllers\Controller;
use App\Models\NoticiaTipo\NoticiaTipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TipoController extends Controller
{


    public function index(){
        $tipos = DB::table('noticia_tipos')->get();

        return view('admin.dashboard.listartipo',['tipos'=>$tipos]);
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'tipo' => 'required|max:255',
        ]);

        NoticiaTipo::create([
            'nome_tipo'=>$request->tipo
        ]);
        return redirect()->route('listarTipo');
    }

    public function editarNoticia($id_tipo){
        $tipo = DB::table('noticia_tipos')->where('id_tipo',$id_tipo)->first();

        return view('admin.dashboard.editarTipo', compact('tipo'));
    }

    public function editNews(Request $request){
        $tipoUpdate = DB::table('noticia_tipos')
                      ->where('id_tipo', $request->id)
                      ->update(['nome_tipo'=>$request->tipo]);
        return redirect()->route('listarTipo');

    }
}
/*
    <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiasTable extends Migration
{


    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->bigIncrements('noticia_id');
            $table->unsignedBigInteger('noticiatipo_id_tipo');
            $table->string('titulo');
            $table->string('artigo');
            $table->text('news_short_description');
            $table->text('news_full_content');
            $table->text('image_noticia');
            $table->unsignedBigInteger('user');
            $table->unsignedBigInteger('categoria');
            $table->timestamps();
            $table->foreign('noticiatipo_id_tipo')->references('id_tipo')->on('noticia_tipos')->onUpdate('CASCADE');
            $table->foreign('user')->references('id')->on('users')->onUpdate('CASCADE');
            $table->foreign('categoria')->references('cat_id')->on('categorias')->onUpdate('CASCADE');
        });
    }


    public function down()
    {
        Schema::dropIfExists('noticias');
    }
}



*/
