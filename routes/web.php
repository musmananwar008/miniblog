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

Route::get('/', [App\Http\Controllers\HomeController::class,'show_post']);
Route::middleware(['auth'])->group(function (){
    Route::get('/post',[App\Http\Controllers\PostController::class,'index'])->name('post_index');
    Route::get('/post/edit/{id}',[App\Http\Controllers\PostController::class,'edit'])->name('post_edit');
    Route::Post('/post/edit/{id}',[App\Http\Controllers\PostController::class,'update'])->name('post_update');
    Route::Delete('/post/destroy/{id}',[App\Http\Controllers\PostController::class,'destroy'])->name('post_destroy');
    Route::post('/post',[App\Http\Controllers\PostController::class,'create'])->name('post_create');
    Route::get('/dashboard',[App\Http\Controllers\DashboardController::class,'show_post'])->name('dashboard');


});

require __DIR__.'/auth.php';
