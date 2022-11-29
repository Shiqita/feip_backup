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

Route::get('/catalog/{slug?}', action: [\App\Http\Controllers\CatalogController::class, 'index'])->name('catalog');

Route::get('/catalog/product/{slug}', action: [\App\Http\Controllers\ProductController::class, 'index'])->name('product');

Route::get('/profile', action: [\App\Http\Controllers\ProfileController::class, 'show']);

//Route::get('/{slug}', action: [\App\Http\Controllers\InfoPageController::class, 'show']);

