<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () { return view('auth.login');});
Route::get('/home', [PostController::class,'index'])->name('home');
Route::get('/profile', function () { return view('insta');})->name('profile');
// Route::get('/profile', [PostController::class,'index'])->name('profile');
Route::get('/create', function () { return view('create_post');})->name('create');
Route::get('/edit_profile', function(){return view('edit_profile');})->name('edit_profile');
Auth::routes();

 

Route::post('/post',[PostController::class,'store'])->name('post.save');
