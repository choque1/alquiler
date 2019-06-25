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

Route::get('/', 'Seguridad\LoginController@index');
Route::get('seguridad/login', 'Seguridad\LoginController@index')->name('login');
Route::post('seguridad/login', 'Seguridad\LoginController@login')->name('login_post');
Route::get('seguridad/logout', 'Seguridad\LoginController@logout')->name('logout');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'superadmin']], function () {
    Route::get('','AdminController@index');
    Route::resource('con','ContratoController');
    Route::get('contrato', 'ContratoController@index')->name('contrato');
    Route::get('contrato/create', 'ContratoController@create')->name('contrato_create');
    Route::post('contrato', 'ContratoController@store')->name('contrato_store');
    
    
    Route::get('permiso', 'PermisoController@index')->name('permiso');
    Route::get('permiso/create', 'PermisoController@create')->name('permiso_create');
    //menu
    Route::get('menu', 'MenuController@index')->name('menu');
    Route::get('menu/create', 'MenuController@create')->name('menu_create');
    Route::post('menu', 'MenuController@store')->name('menu_store');
    Route::post('menu/guardar-orden', 'MenuController@guardarOrden')->name('guardar_orden');
    //usuario
    Route::get('usuario', 'UsuarioController@index')->name('usuario');
    Route::get('usuario/create', 'UsuarioController@create')->name('usuario_create');
    Route::post('usuario', 'UsuarioController@store')->name('usuario_store');
    Route::get('usuario/{id}', 'UsuarioController@destroy')->name('usuario_delete');
    //departamento
    Route::get('departamento', 'DepartamentoController@index')->name('departamento');
    Route::get('departamento/create', 'DepartamentoController@create')->name('departamento_create');
    Route::post('departamento', 'DepartamentoController@store')->name('departamento_store');
    Route::get('departamento/{id}/edit', 'DepartamentoController@edit')->name('departamento_edit');
    Route::put('departamento/{id}', 'DepartamentoController@update')->name('departamento_update');
    Route::delete('departamento/{id}', 'DepartamentoController@destroy')->name('departamento_delete');
    //Usuario
    Route::get('usuario', 'UsuarioController@index')->name('usuario');
    Route::get('usuario/create', 'UsuarioController@create')->name('usuario_create');
    Route::post('usuario', 'UsuarioController@store')->name('usuario_store');
    Route::get('cuarto/{id}/edit', 'CuartoController@edit')->name('cuarto_edit');
    Route::put('cuarto/{id}', 'CuartoController@update')->name('cuarto_update');
    Route::delete('cuarto/{id}', 'CuartoController@destroy')->name('cuarto_delete');
    
});
