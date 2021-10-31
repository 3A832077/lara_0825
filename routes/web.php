<?php

use App\Http\Controllers\HomeController;
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

Route::get('posts', [HomeController::class, 'index'])->name('posts.index');
Route::get('post', [HomeController::class, 'show'])->name('posts.show');
Route::get('contact', [HomeController::class, 'contact'])->name('posts.contact');
Route::get('about', [HomeController::class, 'about'])->name('posts.about');
