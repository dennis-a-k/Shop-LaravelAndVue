<?php

use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)->name('main.index');

Route::group([
    'prefix'    => 'categories',
    'as'        => 'category.',
], function() {
    Route::get('/', \App\Http\Controllers\Category\IndexController::class)->name('index');
    Route::get('/create', \App\Http\Controllers\Category\CreateController::class)->name('create');
    Route::post('/', \App\Http\Controllers\Category\StoreController::class)->name('store');
    Route::get('/{category}/edit', \App\Http\Controllers\Category\EditController::class)->name('edit');
    Route::get('/{category}', \App\Http\Controllers\Category\ShowController::class)->name('show');
    Route::patch('/{category}', \App\Http\Controllers\Category\UpdateController::class)->name('update');
    Route::delete('/{category}', \App\Http\Controllers\Category\DeleteController::class)->name('delete');
});

Route::group([
    'prefix'    => 'tags',
    'as'        => 'tag.',
], function() {
    Route::get('/', \App\Http\Controllers\Tag\IndexController::class)->name('index');
    Route::get('/create', \App\Http\Controllers\Tag\CreateController::class)->name('create');
    Route::post('/', \App\Http\Controllers\Tag\StoreController::class)->name('store');
    Route::get('/{tag}/edit', \App\Http\Controllers\Tag\EditController::class)->name('edit');
    Route::get('/{tag}', \App\Http\Controllers\Tag\ShowController::class)->name('show');
    Route::patch('/{tag}', \App\Http\Controllers\Tag\UpdateController::class)->name('update');
    Route::delete('/{tag}', \App\Http\Controllers\Tag\DeleteController::class)->name('delete');
});

Route::group([
    'prefix'    => 'colors',
    'as'        => 'color.',
], function() {
    Route::get('/', \App\Http\Controllers\Color\IndexController::class)->name('index');
    Route::get('/create', \App\Http\Controllers\Color\CreateController::class)->name('create');
    Route::post('/', \App\Http\Controllers\Color\StoreController::class)->name('store');
    Route::get('/{color}/edit', \App\Http\Controllers\Color\EditController::class)->name('edit');
    Route::get('/{color}', \App\Http\Controllers\Color\ShowController::class)->name('show');
    Route::patch('/{color}', \App\Http\Controllers\Color\UpdateController::class)->name('update');
    Route::delete('/{color}', \App\Http\Controllers\Color\DeleteController::class)->name('delete');
});

Route::group([
    'prefix'    => 'users',
    'as'        => 'user.',
], function() {
    Route::get('/', \App\Http\Controllers\User\IndexController::class)->name('index');
    Route::get('/create', \App\Http\Controllers\User\CreateController::class)->name('create');
    Route::post('/', \App\Http\Controllers\User\StoreController::class)->name('store');
    Route::get('/{user}/edit', \App\Http\Controllers\User\EditController::class)->name('edit');
    Route::get('/{user}', \App\Http\Controllers\User\ShowController::class)->name('show');
    Route::patch('/{user}', \App\Http\Controllers\User\UpdateController::class)->name('update');
    Route::delete('/{user}', \App\Http\Controllers\User\DeleteController::class)->name('delete');
});

Route::group([
    'prefix'    => 'products',
    'as'        => 'product.',
], function() {
    Route::get('/', \App\Http\Controllers\Product\IndexController::class)->name('index');
    Route::get('/create', \App\Http\Controllers\Product\CreateController::class)->name('create');
    Route::post('/', \App\Http\Controllers\Product\StoreController::class)->name('store');
    Route::get('/{product}/edit', \App\Http\Controllers\Product\EditController::class)->name('edit');
    Route::get('/{product}', \App\Http\Controllers\Product\ShowController::class)->name('show');
    Route::patch('/{product}', \App\Http\Controllers\Product\UpdateController::class)->name('update');
    Route::delete('/{product}', \App\Http\Controllers\Product\DeleteController::class)->name('delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
