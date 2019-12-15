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
    return view('layouts.layaut');
});
Route::get('/tabla', function () {
    return view('socio.advanced_table');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/perfilSocio', 'socioController@perfil')->name('perfilSocio');
Route::get('/listarSocio', 'socioController@listar')->name('listarSocio');
Route::get('/vistaAsistencia', 'asistenciaController@vistaAsistencia')->name('vistaAsistencia');
Route::get('/listarPagosMembresia', 'membresiaController@listarPagosMembresia')->name('listarPagosMembresia');
Route::post('/pagarMembresia', 'membresiaController@pagarMembresia')->name('pagarMembresia');
Route::get('/modificarPagoMembresia/{id}', 'membresiaController@modificarPago')->name('modificarPago');
Route::post('/controlAsistencia', 'asistenciaController@tomarAsistencia')->name('controlAsistencia');
Route::get('/nuevoProducto','productoController@nuevoProducto')->name('nuevoProducto');
Route::get('/productos','productoController@listarProductos')->name('listarProductos');
Route::get('/modificarProducto/{id}','productoController@modificarProducto')->name('modificarProducto');
Route::get('/ventaProductos','ventaController@ventaProductos')->name('ventaProductos');
Route::post('/agregarVentas','ventaController@agregarVentas')->name('agregarVentas');
Route::get('/ListaVentas','ventaController@listarVentas')->name('listarVentas');
Route::get('/editarVenta/{id}','ventaController@editarVenta')->name('editarVenta');
// Route::put('/actualizarVenta','ventaController@actualizarVenta')->name('actualizarVenta');


Route::resource('socio', 'socioController');
Route::resource('producto', 'productoController');
Route::resource('venta', 'ventaController');
Route::resource('membresia', 'membresiaController');

