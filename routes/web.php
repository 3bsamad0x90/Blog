<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\postController;
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
Auth::routes();
Route::get('/', function () {
    return view('auth.login');
});

//Group of middleware
Route::middleware(['auth'])->group(function(){
    //index page
    Route::get('/posts', [postController::class,'index'])->name('posts.index');
    //create post
    Route::get('/posts/create', [postController::class,'create'])->name('posts.create');
    Route::post('/posts', [postController::class,'store'])-> name('posts.store');
    //edit post
    route::get('/posts/edit/{id}', [postController::class,'edit'])-> name('posts.edit');
    Route::put('/posts/{id}', [postController::class,'update'])-> name('posts.update');
    //delete post
    Route::delete('/posts/{id}', [postController::class,'destroy'])-> name('posts.destroy');
    //show post details
    Route::get('/posts/{id}', [postController::class,'show'])->name('posts.show');

});


//Admin Login routes
Route::get('/admin',[LoginController::class,'showAdminLoginForm'])->name('admin.login-view');
Route::post('/admin',[LoginController::class,'adminLogin'])->name('admin.login');
//Admin Registration routes
Route::get('/admin/register',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
Route::post('/admin/register',[RegisterController::class,'createAdmin'])->name('admin.register');


Route::get('/admin/dashboard',function(){
    return view('admin');
})->middleware('auth:admin');



