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
use Spatie\Sitemap\SitemapGenerator;

Route::get('/sitemap.xml', function () {
    SitemapGenerator::create('https://epiclawns.com.au')
        ->add(URL::to('/'))
        ->add(URL::to('/locale'))
        ->add(URL::to('/contact'))
        ->writeToFile(public_path('sitemap.xml'));

    return 'Sitemap generated successfully.';
});


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

// Add regions

Route::get('/locale', function () {

    return view('locale', [
        'locale' => App\Models\Local::all()
    ]);

});

Route::get('locale/{local:slug}', function (App\Models\Local $local) {
    
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
