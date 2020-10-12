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
    return view('welcome');
});


//Route::get('posts/{post}',[\App\Http\Controllers\PostController::class]);
//Route::get('posts/{post}','PostController@show');
Route::get('/posts/{posts}', [\App\Http\Controllers\PostController::class, 'show']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
     return view('about', [
        'articles' => App\Models\Artical::take(3)->latest()->get() //This is equivalent to: order by create_at desc . In mysql
    ]);
});

/*
Route::get('/das', function () {
    return view('das');
}); */

Route::get('/das', [\App\Http\Controllers\DasController::class, 'index']);
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index']);
Route::get('/articles/{article}', [\App\Http\Controllers\ArticlesController::class, 'show']);
Route::get('/show', function (){
    return view('articles.show');
});

Route::get('/articles', [\App\Http\Controllers\Articles_subController::class, 'show']);

