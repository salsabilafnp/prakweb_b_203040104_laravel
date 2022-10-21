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
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Salsabila Febrianty",
        "email" => "203040104@mail.unpas.ac.id",
        "image" => "profil.jpg"
    ]);
});

Route::get('/blog', function () {
    return view('posts');
});
