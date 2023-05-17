<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Add region to home

Route::get('/', function () {

    return view('home-region', [
        'locale' => App\Models\Local::all()
    ]);

});

// Add posts 

Route::get('/posts', function () {

    return view('posts', [
        'posts' => App\Models\Post::all()
    ]);

});

Route::get('posts/{post:slug}', function (App\Models\Post $post) {
    
    return view('post', [
        'post' => $post
    ]);

});

// Add regions

Route::get('/locale', function () {

    return view('locale', [
        'locale' => App\Models\Local::all()
    ]);

});

Route::get('local/{local:slug}', function (App\Models\Local $local) {
    
    return view('local', [
        'local' => $local
    ]);

});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
