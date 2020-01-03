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

// TODO : Catatan masalah routing dan controller

//Biasanya di hard langsung ke view tuh klo cuman nampilin data doang
//tapi klo di situ ada logical pake controller
// Membuat Controlller
// php artisan:make NamaController --resource => Auto nanti dibuatin func defaultnya

Route::get('/', function () {
    return view('welcome');
});

//Route::get('sulaiman', 'UserController@index');

//get some value from url
// Route::get('users/{id}', function ($id) {
//     return "Hello id : ".$id;
// });

//Route Group => jadi kyk url nya di kumpulin
//contoh web\home => web\contact daripada di tulisin satu2 
//mending di gruoping prefix nya
Route::group(['prefix' => 'api'], function () {
    Route::get('showSantri/{idKelas}', 'UserController@index');
    Route::get('showUstadz/', 'UserController@getUstadz');
    Route::get('showAbsenByTanggal/{kelas}/date/{tanggal}/', 'UserController@getAbsen');
});

