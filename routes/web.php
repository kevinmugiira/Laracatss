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





Route::get('/about', function () {
     return view('about', [
        'articles' => App\Models\Artical::take(3)->latest()->get() //This is equivalent to: order by create_at desc . In mysql
    ]);
});


Route::get('/articles', [\App\Http\Controllers\ArticlesController::class, 'index']);
Route::post('/articles', [\App\Http\Controllers\ArticlesController::class, 'store']);
Route::get('/articles/create', [\App\Http\Controllers\ArticlesController::class, 'create']);
Route::get('/articles/{articles}', [\App\Http\Controllers\ArticlesController::class, 'show']);
Route::get('/articles/{articles}/edit', [\App\Http\Controllers\ArticlesController::class, 'edit']);
Route::put('/articles/{articles}', [\App\Http\Controllers\ArticlesController::class, 'update']);



