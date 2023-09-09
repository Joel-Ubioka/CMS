<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PostsController;
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

Route::get('/', [App\Http\Controllers\PagesController::class, 'home']);
Route::get('/about', [App\Http\Controllers\PagesController::class, 'about']);
Route::get('/service', [App\Http\Controllers\PagesController::class, 'service']);
Route::get('/project', [App\Http\Controllers\PagesController::class, 'project']);
Route::get('/team', [App\Http\Controllers\PagesController::class, 'team']);
Route::get('/testimonial', [App\Http\Controllers\PagesController::class, 'testimonial']);
Route::get('/blog', [App\Http\Controllers\PagesController::class, 'blog']);
Route::get('/detail', [App\Http\Controllers\PagesController::class, 'detail']);
Route::get('/contact', [App\Http\Controllers\PagesController::class, 'contacted']);
Route::get('/contact_message', [App\Http\Controllers\PagesController::class, 'contact_message']);

Route::post('contact', [App\Http\Controllers\PagesController::class, 'form'])->name('contact');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('categories', CategoriesController::class);
Route::resource('posts', PostsController::class);