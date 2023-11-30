<?php

use App\Http\Controllers\InsertControlles;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* GET */
Route::get('/',[PagesController::class, 'home'])->name('homePrincipal');
Route::get('blog-details/{idPostagem}', [PagesController::class, 'blogDetails'])->name('blog-details');
Route::get('blog', [PagesController::class, 'blog']);
Route::get('cardapio', [PagesController::class, 'cardapio']);
Route::get('lista', [PagesController::class, 'lista']);
Route::get('lista-details/{id?}', [PagesController::class, 'listaDetails']);
Route::get('acelere', [PagesController::class, 'acelere']);
Route::get('posts/{idPostagem}',[PagesController::class, 'postagemCurtir']);
Route::get('blog-details/posts/{idPostagem}',[PagesController::class, 'postagemCurtir']);

/* POST */
Route::post('insertComentario/{idPostagem}', [InsertControlles::class, 'store']);
Route::post('lista-details/{busca?}', [PagesController::class, 'listaDetails']);

