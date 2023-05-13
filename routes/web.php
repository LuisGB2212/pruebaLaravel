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

Route::get('/', [App\Http\Controllers\HomeController::class, 'home']);

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::resource('comments', App\Http\Controllers\CommentController::class)->middleware(['auth', 'verified']);
Route::resource('settings', App\Http\Controllers\SettingController::class, [ 'only' => ['show', 'update'] ])->middleware(['auth', 'verified']);

//Route::post('/comment', [App\Http\Controllers\CommentController::class, 'store'])->name('add_comment')->middleware(['auth', 'verified']);

Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('/send-message', [App\Http\Controllers\HomeController::class, 'sendMessage'])->name('send_message');
