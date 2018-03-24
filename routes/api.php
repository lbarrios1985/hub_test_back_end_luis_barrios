<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Tiendas
 
Route::get('tienda', 'TiendaController@index');
Route::get('tienda/{tienda}', 'TiendaController@show');
Route::post('tienda', 'TiendaController@store');
Route::put('tienda/{tienda}', 'TiendaController@update');
Route::delete('tienda/{tienda}', 'TiendaController@delete');

// Producto

Route::get('producto', 'TiendaController@index');
Route::get('producto/{producto}', 'TiendaController@show');
Route::post('producto', 'TiendaController@store');
Route::put('producto/{producto}', 'TiendaController@update');
Route::delete('producto/{producto}', 'TiendaController@delete');

// Proveedor

Route::get('proveedor', 'ProveedorController@index');
Route::get('proveedor/{proveedor}', 'ProveedorController@show');
Route::post('proveedor', 'ProveedorController@store');
Route::put('proveedor/{proveedor}', 'ProveedorController@update');
Route::delete('proveedor/{proveedor}', 'ProveedorController@delete');

// Actualizar inventario (entrada y salida)
Route::post('inventario/entrada', 'CompraController@register');

// Listado de Ventas

// Cierre de inventario (por fecha)