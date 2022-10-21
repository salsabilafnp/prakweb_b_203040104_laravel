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



Route::get('/blog', function () {
    $blog_posts = [
        [
            "tittle" => "First Post",
            "slug" => "first-post",
            "author" => "Sabil",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat quibusdam natus repudiandae voluptatem vero saepe perspiciatis amet porro velit, optio dolores excepturi sint nisi corporis recusandae, totam repellendus aut corrupti."
        ],
        [
            "tittle" => "Second Post",
            "slug" => "second-post",
            "author" => "Ica",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Et necessitatibus velit deleniti sunt in est explicabo magnam corrupti quo iusto laudantium, architecto nam aliquam omnis accusamus laboriosam numquam officia perferendis animi. Reiciendis error obcaecati tenetur officiis quas quidem, quos iusto, enim nobis est nostrum dolores quis vero harum cum dicta eum qui fugit sequi deleniti! Nulla molestiae et cupiditate in! Eius debitis provident beatae incidunt, perferendis, minima maxime earum blanditiis cupiditate quas aliquid error impedit! Maiores accusantium fugit obcaecati commodi, provident accusamus vitae blanditiis beatae modi deleniti iste. Vel officiis nisi distinctio, a reprehenderit dignissimos animi perspiciatis magni consequatur illo."
        ]
    ];

    return view('posts', [
        "tittle" => "Blog",
        "posts" => $blog_posts
    ]);
});

// page for single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "tittle" => "First Post",
            "slug" => "first-post",
            "author" => "Sabil",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat quibusdam natus repudiandae voluptatem vero saepe perspiciatis amet porro velit, optio dolores excepturi sint nisi corporis recusandae, totam repellendus aut corrupti."
        ],
        [
            "tittle" => "Second Post",
            "slug" => "second-post",
            "author" => "Ica",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Et necessitatibus velit deleniti sunt in est explicabo magnam corrupti quo iusto laudantium, architecto nam aliquam omnis accusamus laboriosam numquam officia perferendis animi. Reiciendis error obcaecati tenetur officiis quas quidem, quos iusto, enim nobis est nostrum dolores quis vero harum cum dicta eum qui fugit sequi deleniti! Nulla molestiae et cupiditate in! Eius debitis provident beatae incidunt, perferendis, minima maxime earum blanditiis cupiditate quas aliquid error impedit! Maiores accusantium fugit obcaecati commodi, provident accusamus vitae blanditiis beatae modi deleniti iste. Vel officiis nisi distinctio, a reprehenderit dignissimos animi perspiciatis magni consequatur illo."
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "tittle" => "Single Post",
        "post" => $new_post
    ]);
});
