<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
        "title" => "Home",
        'array' => ['satu' => 1, 'dua' => 2]
    ]);
});

Route::get('/post', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Cateories',
        'categories' => Category::all()
    ]);
});
Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts',[
        'title' => "Post By : $category->name",
        'posts' => $category->posts->load('category', 'user'),
    ]);
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
        'title' => 'User Post',
        'posts' => $author->posts->load('category', 'user'),
    ]);
});




Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Antony Syahputra",
        "email" => "anto@gmail.com",
        "image" => "antony.jpg",
    ]);
});
