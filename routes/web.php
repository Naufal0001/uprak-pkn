<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\MainControlller;
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

Route::get('/', function () {
    return view('home');
});


Route::get('/post/nama-post', function () {
    return view('post');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::group(['middleware' => "guest"], function(){
    Route::prefix('news')->group(function(){
       Route::get('/', [MainControlller::class, 'index'])->name('news'); 
       Route::get('/{blog:blog_title}', [MainControlller::class, 'show'])->name('newsShow'); 
    });
});


Route::group(["middleware"=> "auth"], function(){
    Route::resource('/blogs', BlogController::class);
});