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

// RETURN STRING
Route::get('coba', function(){
    return "Hallownomnom";
});
// array
Route::get('coba1', function(){
    return ['naomi','jay','nomnom'];
});

//json objek
Route::get('coba2', function(){
    return [
        'Nama' => 'Kalysa Naomi P',
        'Kelas' => 'XII RPL 4',
        'Nis' => 3103120121
    ];
});

//Objek JSON, Mengubah status code
Route::get('coba3', function(){
    return response()->json(
        [
        'Nama' => 'Kalysa Naomi P',
        'Kelas' => 'XII RPL 4',
        'Nis' => 3103120121
        ], 201
    );
});

