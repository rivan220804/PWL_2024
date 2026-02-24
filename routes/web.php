<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;
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

Route::get('/', HomeController::class);

Route::get('/hello', [PageController::class, 'hello']);

Route::get('/world', function () {
    return 'World';
});

Route::get('/about', AboutController::class);

Route::get('/user/{name?}', function ($name = null) {
    return 'Nama Saya ' . $name;
});

Route::get('/posts/{postId}/comments/{commentId}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . ' Komentar ke-' . $commentId;
});

Route::get('/articles/{id}', ArticleController::class);

Route::resource('photos', PhotoController::class)->only([
'index', 'show'
]);

