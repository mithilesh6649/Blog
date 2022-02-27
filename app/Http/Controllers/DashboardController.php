<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class DashboardController extends Controller
{
     public function index(){
     	// dd(auth()->user()); //Both are same
     	//dd(Auth::user()); // jab vi Auth::user() ka use hoga use Auth import karna jarruri hai
     	
     	return view('dashboard');
     }
}
