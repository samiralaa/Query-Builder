<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PersoneController;
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
Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
//Post Route
Route::controller(PostController::class)->group(function ()
{
    Route::get('post','index')->name('post.index');
    Route::get('post/create','create')->name('post.create');
    Route::post('post/store','store')->name('post.store');
    Route::get('post/show/{id}','show')->name('post.show');
    Route::get('post/edit/{id}','edit')->name('post.edit');
    Route::PUT('post/update/{id}','update')->name('post.update');
    Route::delete('post/destroy/{id}','destroy')->name('post.destroy');
});
Route::get('/persone',[PersoneController::class,'index'])->name('persone.index');
Route::get('/persone/create',[PersoneController::class,'create'])->name('persone.create');
Route::post('/persone/store',[PersoneController::class,'store'])->name('persone.store');
Route::get('/persone/show/{id}',[PersoneController::class,'show'])->name('persone.show');
Route::get('/persone/edit/{id}',[PersoneController::class,'edit'])->name('persone.edit');
Route::PUT('/persone/update/{id}',[PersoneController::class,'update'])->name('persone.update');
Route::delete('/persone/destroy/{id}',[PersoneController::class,'destroy'])->name('persone.destroy');