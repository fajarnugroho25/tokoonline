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

Route::get('/products  ', function () {
    $subjudul =  'Katalog Lengkap';
    $contoh =  '12345';
    //return view('products.index',['judul' => $subjudul],['noantrian' => $contoh]);
    return view('products.index',compact(['subjudul'],['contoh']));
}); 
