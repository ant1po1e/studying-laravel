<?php

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
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        "title" => "Blogs",
        "posts" => Post::alL()
    ]);
});

Route::get('posts/{post:slug}', function (Post $post) {
    return view('post', [
        "title" => "Single Post", 
        "post" => $post
    ]);
});

