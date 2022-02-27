<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/


/*Route::get('/welcome',function(){
	return view('index',array("data"=>array("name"=>"mithilesh","class"=>"6","F name"=>"Lak")));
});*/


 Route::get('/register',[RegisterController::class,'index'])->name('register');
 
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::get('/logout',[LogoutController::class,'index'])->name('logout');
Route::post('/login',[LoginController::class,'store']) ;

 Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard')->middleware('auth');

 Route::post('/register',[RegisterController::class,'store']);
 
 

 Route::get('/',function(){
	return view('home');
})->name('home');

/*  Route::get('/posts',function(){
	return view('posts.index');
})->name('post');*/

  Route::get('/posts',[PostController::class,'index'])->name('post');