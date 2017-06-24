<?php

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


Route::get('/','HomeController@home');

Route::get('/home','HomeController@index');

Route::post('/seguir-disciplina','UserController@seguirDisciplina');

Route::post('/criar-conta','UserController@criarConta');

Route::get('/instituicoes','InstituicaoController@getInstituicoes');

Route::resource('disciplina','DisciplinaController');

Route::get('perfil','UserController@getPerfil');

Route::get('/teste', function () {
    return view('layouts/master');
});
Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile','UploadFileController@showUploadFile');


Auth::routes();
Route::resource('universidades','UniversidadeController');
Route::resource('faculdades','FaculdadeController');
Route::resource('departamentos','DepartamentoController');
Route::resource('cursos','CursoController');
Route::resource('categorias','CategoriaController');
Route::resource('users','UserController');