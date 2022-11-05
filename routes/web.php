<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;
use App\Http\Controllers\MessageController;

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
//index page
Route::get('/posts', [postController::class,'index'])->name('posts.index');
//create post
Route::get('/posts/create', [postController::class,'create'])->name('posts.create');
Route::post('/posts', [postController::class,'store'])-> name('posts.store');
//edit post
route::get('/posts/edit/{id}', [postController::class,'edit'])-> name('posts.edit');
Route::put('/posts/{id}', [postController::class,'update'])-> name('posts.update');

Route::delete('/posts/{id}', [postController::class,'destroy'])-> name('posts.destroy');
//show post details
Route::get('/posts/{id}', [postController::class,'show'])->name('posts.show');

//contact us
Route::get('/contact', 'App\Http\Controllers\MessageController@index')->name('contact.index');
Route::post('/contact/store', 'App\Http\Controllers\MessageController@store')->name('contact.store');
//ajax
Route::get('ajax',function() {
    return view('message');
 });
 Route::post('/getmsg', [MessageController::class, 'getMessage']);
