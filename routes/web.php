<?php

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

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;

Auth::routes();

Route::prefix('/admin')->middleware(['auth'])->group(function(){
    Route::get('/', [AdminController::class, 'home'])->name('home');
    Route::get('/index', [AdminController::class, 'index'])->name('index');
    Route::get('/read/{id}', [AdminController::class, 'read'])->name('read');
    Route::get('/show/{id}', [AdminController::class, 'show'])->name('show');
    Route::post('/create', [AdminController::class, 'createPost'])->name('create');
    Route::get('/write', [AdminController::class, 'write'])->name('write');
    Route::put('/update/{id}', [AdminController::class, 'updatePost'])->name('update');
    Route::get('/change/{id}', [AdminController::class, 'change'])->name('change');
    Route::delete('/delete/{id}', [AdminController::class, 'deletePost'])->name('delete');
});

Route::get('/list', [FrontController::class, 'index']);
Route::get('/show/{id}', [FrontController::class, 'show']);
Route::get('/{any}', [FrontController::class, 'any'])->where('any', '.*');

//Route::get('/read/{id}', [FrontController::class, 'read']);
//Route::get('/', [FrontController::class, 'welcome']);

