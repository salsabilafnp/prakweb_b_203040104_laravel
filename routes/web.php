<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        "tittle" => "Home",
        "active" => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "active" => 'about',
        "name" => "Salsabila Febrianty",
        "email" => "203040104@mail.unpas.ac.id",
        "image" => "profil.jpg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

// page for single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

// categories
Route::get('/categories', function () {
    return view('categories', [
        'tittle' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all()
    ]);
});

//Route::get('/categories/{category:slug}', function (Category $category) {
//    return view('posts', [
//        'tittle' => "Posts in $category->name Category",
//        "active" => 'categories',
//        'posts' => $category->posts->load('category', 'author')
//    ]);
//});

//authors
//Route::get('/authors/{author:username}', function (User $author) {
//    return view('posts', [
//        'tittle' => "Posts by Author : $author->name",
//        'active' => 'posts',
//        'posts' => $author->posts->load('category', 'author')
//    ]);
//});
