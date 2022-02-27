<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class LogoutController extends Controller
{
     public function index(){
     	//dd(Auth::logout());
     	//Auth::logout();
     	auth()->logout();

     	return redirect()->route('home');
     }
}
