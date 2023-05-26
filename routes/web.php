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

// Sitemap 
use App\Http\Controllers\SitemapController;
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap.index');

// Route Home
use App\Http\Controllers\HomeController;
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');


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

// Add lawns
// use App\Http\Controllers\LawnController;

// Route::get('/lawns', 'LawnController@index')->name('lawns');

Route::get('/lawns', function () {

    return view('lawns', [
        'lawns' => App\Models\Lawn::all()
    ]);

});

// Add lawn show
Route::get('lawns/{lawn:slug}', function (App\Models\Lawn $lawn) {
    
    return view('lawn', [
        'lawn' => $lawn
    ]);

});


// OpenGraph 

// use App\Http\Controllers\BrowsershotController;
// Route::get('/lawns/abbeyard/openGraphImage', [BrowsershotController::class, 'screenshotOpenGraph']);


use App\Models\Lawn;
Route::get('lawns/{lawn:slug}', function ($slug) {
    $lawn = Lawn::whereSlug($slug)->firstOrFail();

    return view('lawn', ['lawn' => $lawn]);
});

Route::get('lawns/{lawn:slug}/preview', function ($slug) {
    $lawn = Lawn::whereSlug($slug)->firstOrFail();

    return view('lawns/openGraphImage', [
        'lawn' => $lawn]);
    })->name('lawn.openGraphImage');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
