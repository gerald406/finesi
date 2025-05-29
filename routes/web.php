<?php

use App\Http\Controllers\FotoController;
use App\Http\Controllers\ProductoController;
Use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::controller(PostController::class)->group( function(){
    Route::get('/', 'index')->name('posts.index');
    Route::get('/posts/create', 'create')->name('posts.create');
    Route::post('/posts','store')->name('posts.store');
    Route::get('/posts/{post}', 'show')->name('posts.show');
    Route::get('/posts/{post}/edit', 'edit')->name('posts.edit');
    Route::put('/posts/{post}', 'update')->name('posts.update');
    Route::delete('/posts/{post}', 'destroy')->name('posts.destroy');   
});

/* Route::controller(ProductoController::class)->group( function(){
    Route::get('/', 'index')->name('productos.index');
    Route::get('/productos/create', 'create')->name('productos.create');
    Route::post('/productos','store')->name('productos.store');
    Route::get('/productos/{producto}', 'show')->name('productos.show');
    Route::get('/productos/{producto}/edit', 'edit')->name('productos.edit');
    Route::put('/productos/{producto}', 'update')->name('productos.update');
    Route::delete('/productos/{producto}', 'destroy')->name('productos.destroy');   
}); */
/* Route::resource('productos', ProductoController::class)
        ->except('create','edit'); 

Route::resource('productos', ProductoController::class)
    ->only(['index','store','show']);


Route::resource('Fotos', FotoController::class);*/