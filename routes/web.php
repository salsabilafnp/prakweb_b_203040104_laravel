<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "name" => "Salsabila Febrianty",
        "email" => "203040104@mail.unpas.ac.id",
        "image" => "profil.jpg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

// page for single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);
