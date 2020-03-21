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

Route::get('/', 'pagecontroller@inicio') -> name('inicio');

Route::get('/detalle/{id}', 'pagecontroller@detalle')->name('usuario.detalle');

route::post('/crear', 'pagecontroller@crear')-> name('usuario.crear');

route::put('/up/{id}', 'pagecontroller@up')-> name('usuario.up');

route::delete('eliminar/{id}', 'pagecontroller@eliminar')-> name('usuario.eliminar');

route::get('/edit/{id}', 'pagecontroller@edit')-> name('usuario.edita');
