<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', function(){
    return view('index');
});

// página inicial do site
// Route::get('/', 'UsuarioController@index');

// mostrar cadastro e login
Route::get('/cadastro-login', 'usuariosController@MostrarFormLoginCadastro');

// Realizar login
Route::post('/login', 'usuariosController@FazerLogin');

// Realizar logout
Route::get('/logout', 'usuariosController@logout');

// Realizar cadastro
Route::post('/cadastro', 'usuariosController@store');

// Apresenta o interior da aplicação
Route::get('/home', 'homeController@index');

//criar membro
Route::post('/create-membro', 'gestorController@criarMembro');
Route::get('/create-membro', 'gestorController@index');

//criar tarefa
Route::post('/create-tarefa', 'gestorController@criarTarefa');


Route::get('/create-tarefa', 'gestorController@mostrarTarefa');
Route::get('/create-tarefa', 'gestorController@mostrarUsuario');

// Realizar o update de imagem
Route::post('/profile', 'usuariosController@profile');



Route::get('/membro', function () {
    return view('membro');
});

Route::get('/lojadepontos', function () {
    return view('lojadepontos');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/ranking', function () {
    return view('ranking');
});

Route::get('/configuracoes', function () {
    return view('configuracoes');
});

Route::get('/tarefas', function () {
    return view('tarefas');
});

Route::get('/membrohome', function () {
    return view('membrohome');
});

Route::get('/membroperfil', function () {
    return view('membroperfil');
});

Route::get('/membrofeedbacks', function () {
    return view('membrofeedbacks');
});

Route::get('/membrotarefas', function () {
    return view('membrotarefas');
});

Route::get('/membrolojadepremios', function () {
    return view('membrolojadepremios');
});

Route::get('/membroconfiguracoes', function () {
    return view('membroconfiguracoes');
});

Route::get('/membrofaq', function () {
    return view('membrofaq');
});
/*@foreach ($tarefas as $tarefa)
         <h1>{{ $tarefa->nm_tarefa }}</h1>
         <h1>{{ $tarefa->ds_status }}</h1>
         <h1>{{ $tarefa->qtd_pontos }}</h1>
      @endforeach*/


// Realizar a exibição imagem
//Route::get('/home/{id}', 'homeController@pegarUmAvatar');

// logout
/*Route::group(['middleware' => ['auth']], function(){

    // página home
    Route::get('/logout', function(){
        Auth::logout();
        return redirect()->action('LoginController@form');
    })->name('logout');
});

Route::post('/', 'UsuarioController@store');

Route::get('/login', function(){
    return view('layouts.login');
});*/
