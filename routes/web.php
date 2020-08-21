<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('seguridad/login', 'Seguridad\LoginController@index')->name('login');
Route::post('seguridad/login', 'Seguridad\LoginController@login')->name('login_post');
Route::get('seguridad/logout', 'Seguridad\LoginController@logout')->name('logout');


Route::get('inventario', 'InventarioController@index')->name('inventario');
Route::get('inventario/create_producto', 'InventarioController@create' )->name('create_producto_inventario');
Route::post('inventario', 'InventarioController@store' )->name('store_producto_inventario');

Route::get('pedidos', 'PedidoController@index')->name('pedidos');
Route::get('pedidos/crear' , 'PedidoController@create')->name('crear_pedido');
Route::post('pedidosr' , 'PedidoController@store')->name('guardar_pedido');