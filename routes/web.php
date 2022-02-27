<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

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
 
 Route::post('/register',[RegisterController::class,'store']);
 
 Route::get('/',function(){
	return view('posts.index');
});