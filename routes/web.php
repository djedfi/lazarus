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


Route::get('/', function () {
    return view('home');
});

Route::resource('obispo','ObispoController');

Route::get('/confirma',function(){

    return view('confirma.index');
});

Route::get('api/confirmas',function(){
  return datatables()->eloquent(Lazarus\Confirma::query())->toJson();
});
