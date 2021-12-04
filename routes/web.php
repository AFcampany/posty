<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserPostsController;

use App\Http\Controllers\DashbordController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PostLikesController;



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
Route::get('/',function (){
    return view('home');
})->name('home');


Route::get('dashbord',[DashbordController::class, 'index'])->name('dashbord');

Route::post('logiout',[LogoutController::class, 'store'])->name('logout');

Route::get('login',[LoginController::class, 'index'])->name('login');
Route::post('login',[LoginController::class, 'store']);

Route::get('user/{user}/posts',[UserPostsController::class, 'index'])->name('user.posts');

Route::get('register',[RegisterController::class, 'index'])->name('register');
Route::post('register',[RegisterController::class, 'store']);

Route::get('posts',[PostsController::class, 'index'])->name('post');
Route::get('posts/{post}',[PostsController::class, 'show'])->name('post.show');

Route::post('posts',[PostsController::class, 'store']);
Route::delete('posts/{post}',[PostsController::class, 'destroy'])->name('post.destroy');

Route::post('posts/{post}/likes',[PostLikesController::class, 'store'])->name('postsLikes');

Route::delete('posts/{post}/likes',[PostLikesController::class, 'destroy'])->name('postsLikes');
