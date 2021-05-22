<?php

use App\Http\Controllers\AuthAdmin\Login;
use App\Http\Controllers\AuthAdmin\Logout;
use App\Http\Controllers\AuthAdmin\Register;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\MenuController;
use App\Http\Controllers\Noticia\CategoriaController;
use App\Http\Controllers\Noticia\NoticiaController;
use App\Http\Controllers\Noticia\TipoController;
use App\Http\Controllers\Publicidade\PublicidadeController;
use Illuminate\Support\Facades\Route;




Route::get('/', [HomeController::class, 'index']);




Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/admin/dashboard/register', [Register::class, 'index'])->name('register');
Route::post('/admin/dashboard/register',[Register::class, 'store']);


Route::get('/admin/dashboard/login', [Login::class, 'index'])->name('login');
Route::post('/admin/dashboard/login',[Login::class, 'store']);

Route::post('/admin/dashboard/logout', [Logout::class, 'index'])->name('logout');

Route::get('/admin/dashboard/noticia', [DashboardController::class, 'indexNoticia'])->name('noticia');
Route::post('/admin/dashboard/noticia', [NoticiaController::class, 'store'])->name('noticiaStore');
Route::get('/admin/dashboard/noticiaListar',[NoticiaController::class, 'index'])->name('listarNoticia');
Route::get('/admin/dashboard/editarNoticia/{id}',[NoticiaController::class, 'editarNoticia'])->name('editarNoticiaGet');
Route::post('/admin/dashboard/editarNoticia',[NoticiaController::class, 'editarNews'])->name('editarNoticiaPost');


Route::get('/admin/noticia/categoria', [DashboardController::class, 'indexCategoria'])->name('categoria');
Route::get('/admin/noticia/categoriaListar',[CategoriaController::class, 'index'])->name('listarCategoria');
Route::post('/admin/noticia/categoria', [CategoriaController::class, 'store'])->name('createCategoria');
Route::get('/admin/noticia/categoriaEditar/{id}',[CategoriaController::class, 'editarCategoria'])->name('editarCatGet');
Route::post('/admin/noticia/categoriaEditar',[CategoriaController::class, 'editarCategory'])->name('editarCatPost');


Route::get('/admin/noticia/tipo', [DashboardController::class, 'indexTipo'])->name('tipo');
Route::post('/admin/noticia/tipo', [TipoController::class, 'store'])->name('createTipo');
Route::get('/admin/noticia/tipoListar',[TipoController::class, 'index'])->name('listarTipo');
Route::get('/admin/noticia/tipoEditar/{id_tipo}', [TipoController:: class, 'editarNoticia'])->name('editarGet');
Route::post('/admin/noticia/tipoEditar', [TipoController:: class, 'editNews'])->name('editarPost');



Route::get('/admin/dashboard/publicidade',[PublicidadeController::class, 'index'])->name('publicidade');
Route::post('/admin/dashboard/publicidade',[PublicidadeController::class, 'store'])->name('createPublicidade');


Route::get('/menu/category/{cat_id}', [MenuController::class, 'index'])->name('menu');

route::get('politics', [MenuController::class, 'politic'])->name('politic');

route::get('contact', [MenuController::class, 'contact'])->name('contact');

route::get('about', [MenuController::class, 'about'])->name('about');

route::get('privacy', [MenuController::class, 'privacy'])->name('privacy');

route::get('termo', [MenuController::class, 'termo'])->name('termo');

route::get('artigo', [MenuController::class, 'artigo'])->name('artigo');

route::get('/logar', [MenuController::class, 'logar'])->name('logar');

route::get('/registar', [MenuController::class, 'registar'])->name('registar');


route::get('/tabela', [MenuController::class, 'tabela'])->name('tabela');

route::get('/subscribe', [MenuController::class, 'subscribe'])->name('subscribe');

route::get('/newslleter', [MenuController::class, 'newslleter'])->name('newslleter');







