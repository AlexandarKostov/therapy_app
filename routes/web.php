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

Route::get('/', \App\Http\Controllers\HomeController::class)->name('home');
Route::get('/about-us', \App\Http\Controllers\AboutController::class)->name('about-us');
Route::get('/service', \App\Http\Controllers\ServiceController::class)->name('service');
Route::resource('/blog', \App\Http\Controllers\BlogController::class);
//Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog');
//Route::get('/blog/{blog:slug}', [\App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
   Route::get('/dashboard', \App\Http\Controllers\DashboardController::class)->name('dashboard');
   Route::resource('/user', \App\Http\Controllers\UserController::class);
});
