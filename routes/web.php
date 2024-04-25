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

Route::get('/home', function () {
    return view('biodata');
});

Route::get('/about', function () {
    $nama = "Alzan";
    $jk = "Laki-laki";
    $alamat = "Tokyo";
    $pd = "S5";
    $pk = "CEO Toyota";
    return view('biodata2', compact('nama','jk','alamat','pd','pk'));
});

Route::get('/kontak', function () {
    return view('biodata3');
});


Route::get('/about2/{nama}/{jk}/{alamat}/{pd}/{pk}', function (Request $request, $nama, $jk, $alamat ,$pd, $pk) {

    $nama1 = $nama;
    $jk1 = "$jk";
    $alamat1 = "$alamat";
    $pd1 = "$pd";
    $pk1 = "$pk";
    return view('param',compact('nama1','jk1','alamat1','pd1','pk1'));
});