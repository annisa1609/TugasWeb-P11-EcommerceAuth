<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;
Route::get('/',[StoreController::class,'index'])->name('store.index');
Route::get('/dashboard',[StoreController::class,'dashboard'])->middleware(['auth'])->name('dashboard');
Route::middleware('auth')->group(function(){Route::get('/posts',[PostController::class,'index'])->name('posts.index');Route::get('/posts/{post}/edit',[PostController::class,'edit'])->name('posts.edit');Route::put('/posts/{post}',[PostController::class,'update'])->name('posts.update');Route::delete('/posts/{post}',[PostController::class,'destroy'])->name('posts.destroy');});
Route::middleware(['auth','role:admin'])->prefix('admin')->name('admin.')->group(function(){Route::view('/','admin.index')->name('index');});
require __DIR__.'/auth.php';
