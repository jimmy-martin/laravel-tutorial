<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VideoController;

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

Route::get('/', [PostController::class, 'index'])->name('welcome');

Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::post('/posts/create', [PostController::class, 'store'])->name('posts.store');

Route::get('/register', [PostController::class, 'register']);

Route::get('/posts/{id}', [PostController::class, 'show'])->whereNumber('id')->name('posts.show');

Route::get('/videos', [VideoController::class, 'show'])->name('videos.show');

Route::get('/videos/{id}', [VideoController::class, 'item'])->whereNumber('id')->name('videos.item');

Route::get('/contact', [PostController::class, 'contact'])->name('contact');

// Route::get('posts', function(){
//     return response()->json([
//         'title' => 'un titre',
//         'description' => 'une description'
//     ]);
// });

// Route::get('articles', function(){
//     return view('articles');
// });
