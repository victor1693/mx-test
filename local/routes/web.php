<?php

use Illuminate\Support\Facades\Route;

# RUTAS USUARIO
Route::get('/user-login', 'App\Http\Controllers\userLogin@index');
Route::post('/user-register', 'App\Http\Controllers\userRegister@create');
Route::post('/user-login', 'App\Http\Controllers\userLogin@login');

Route::middleware(['userAuth'])->group(function () { 
	Route::get('/user-dashboard', 'App\Http\Controllers\userDashboard@index');
	Route::get('/user-cerrar-sesion', 'App\Http\Controllers\userLogin@cerrarSession');
	Route::post('/comprar', 'App\Http\Controllers\userDashboard@comprar');
});


# RUTAS ADMINISTRADOR
Route::get('/admin-login', 'App\Http\Controllers\adminLogin@index'); 
Route::post('/admin-login', 'App\Http\Controllers\adminLogin@login');

Route::middleware(['adminAuth'])->group(function () { 
	Route::get('/cerrar-sesion', 'App\Http\Controllers\adminLogin@cerrarSession'); 

	Route::get('/dashboard', 'App\Http\Controllers\adminDashboard@index');

	Route::get('/facturas', 'App\Http\Controllers\adminFacturas@index');

	Route::get('/facturas/{id}', 'App\Http\Controllers\adminFacturas@factura');

	Route::post('/procesar-compras', 'App\Http\Controllers\adminCompras@procesarFacturas');
	Route::get('/compras', 'App\Http\Controllers\adminCompras@index'); 

	Route::get('/clientes', 'App\Http\Controllers\adminClientes@index'); 

	Route::get('/productos', 'App\Http\Controllers\adminProductos@index');
	Route::post('/productos', 'App\Http\Controllers\adminProductos@create');   
});