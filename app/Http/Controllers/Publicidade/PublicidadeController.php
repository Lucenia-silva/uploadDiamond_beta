<?php

namespace App\Http\Controllers\Publicidade;

use App\Http\Controllers\Controller;
use App\Models\Publicidade\Publicidade;
use Illuminate\Http\Request;

class PublicidadeController extends Controller
{
    public function index(){
        return view('admin.dashboard.formpub');
    }

    public function store(Request $request){
        $this->validate($request, [
            'imagePublicidade'=>'required',
        ]);

        $imagePublicidade = $request->file('imagePublicidade');
        $imagePublicidadeNome = time().'.'.$imagePublicidade->extension();
        $imagePublicidade->move(public_path('images'),$imagePublicidadeNome);

        Publicidade::create([
            'imagem'=>$imagePublicidadeNome
        ]);

        return redirect()->route('dashboard');
    }
}
