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
    return view('home', [
        'comics' => config('comics')
    ]);
})->name('homepage');


Route::get('/product/{id}', function($id) {

    $comicPosition = $id - 1;

    return view('product', [
        'comics' => config('comics'),
        'comicPosition' => $comicPosition
    ]);
})->name('product');
