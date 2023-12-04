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

Route::get('/', function () {
    return redirect()->route('contact.index');
});

Route::group(['prefix' => 'contacts', 'namespace' => 'Contact'], function () {
    Route::get('/', 'IndexController')->name('contact.index');
    Route::get('/create', 'CreateController')->name('contact.create');
    Route::post('/', 'StoreController')->name('contact.store');
});

Route::group(['prefix' => 'comments', 'namespace' => 'Comment'], function () {
    Route::get('/', 'IndexController')->name('comment.index');
    Route::post('/', 'StoreController')->name('comment.store');
});
