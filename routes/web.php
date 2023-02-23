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

Route::get('/', function () {
    echo "Selamat Datang";
});


Route::get('/About', function () {
    echo "Nama: Mukhamad Faruq Al Fahmi <br>";
    return "Nim : 2141720066";
});


Route::get('/Articles/{id}', function ($id){
 return "Halaman Artikel dengan Id ".$id;
});