<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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
//route utk menampilkan view
//URL, nama view, nama route
//menampilkan view index di folder home (home.index)

Route::view('/home', 'home.index')->name('home.index');
Route::view('/kontak', 'home.contact');

$posts = [
    1 => [
        'title' => 'Introduction to Laravel',
        'content' => 'This is a short introduction to Laravel',
        'is_new' => true,
        'has_comments' => true
    ],
    2 => [
        'title' => 'Introduction to PHP',
        'content' => 'This is a short introduction to PHP',
        'is_new' => false
    ],
    3 => [
        'title' => 'Introduction to Golang',
        'content' => 'This is a short introduction to Go Language',
        'is_new' => false
    ]
];

// //menampilkan semua posts
// Route::get('/posts', function() use ($posts)
//     {
//         return view('posts.index', ['posts' => $posts]);
//     }
// );

// //menampilkan posts berdasarkan id
// Route::get('/posts/{id}', function($id) use ($posts){
//         abort_if(!isset($posts[$id]), 404);
//         return view('posts.show', ['posts' => $posts[$id]]);
//     }
// );

Route::resource('posts', PostsController::class)->only('index', 'show', 'create', 'store');
