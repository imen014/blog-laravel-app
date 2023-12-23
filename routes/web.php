<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyBlogController;

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
    return view('welcome');
});
Route::get('/blogs/index', [MyBlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/create', [MyBlogController::class, 'create'])->name('blogs.create');
Route::post('/blogs/store', [MyBlogController::class, 'store'])->name('blogs.store');
Route::put('/blogs/{blog}', [MyBlogController::class, 'update'])->name('blogs.update');
Route::post('/blogs/{blog}', [MyBlogController::class, 'destroy'])->name('blogs.destroy');
Route::get('/blogs/{blog}/edit', [MyBlogController::class, 'edit'])->name('blogs.edit');
