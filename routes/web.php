<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Ejercicio 1
Route::get('/', function () {
    return view('inicio');
})->name('inicio');

//Ejercicio 2
//  Route::get('posts', function () {
//     return view('posts.index');
//  })->name('posts_listado');

//  Route::get('posts/{id?}', function($id = 0) {
//      return  view("posts.index", compact('id')) ;

// })->where('id', '[0-9]+')
// ->name('posts_ficha');


  Route::resource('posts', PostController::class)
  ->only(['index', 'show', 'create', 'edit']);

