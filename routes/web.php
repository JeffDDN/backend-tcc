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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'QrCodeController@index')->name('code');

Route::get('lista_presenca', 'principal\PrincipalController@index')->name('lista_presenca');
Route::get('gerar_qr', 'QrCodeController@gerarQR')->name('gerarQR');

Route::get('presenca', 'cadastroController@presenca')->name('presenca');
