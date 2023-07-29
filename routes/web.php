<?php

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

//Route::get('/', function () {
   // return view('welcome');
//});

//Route::view('/cadastro','cadastro');

// Route::get('/cadastro', function(){
  //  return "Kaique é pica meno em PHP";
//});

// Busca somente por letras
//->where('name', '[A-Za-z]+');

//Route::view('/cadastro','cadastro',['name'=>'Kaique Nocetti']);

//Route::get('/cadastro/{id?}/{name?}', function($id = null, $name = null){
   // return view('cadastro',['idPessoa'=>$id, 'nomePessoa'=>$name]);
//})->where(['id', '[0-9]+', 'name' => '[a-z]+']);

Route::get('/cadastro', function(){
    return view('cadastro');
});

Route::get('/casa', function () {
    return view('welcome');
})->name('index');

Route::fallback(function(){
    return "Error ao encontrar alguma pagina";
});
