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
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::prefix('/admin')->middleware(['auth'])->group(function(){
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/home', [AdminController::class, 'index'])->name('home');
    Route::get('/read/{id}', [AdminController::class, 'read'])->name('read');
    Route::post('/create', [AdminController::class, 'createPost'])->name('create');
    Route::put('/update/{id}', [AdminController::class, 'updatePost'])->name('update');
    Route::delete('/delete/{id}', [AdminController::class, 'deletePost'])->name('delete');
});
