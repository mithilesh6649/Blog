<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
 
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    
    public function __construct(){
        $this->middleware(['guest']);
    }

     public function index(){
    	return view('auth.register');   
     }

     public function store(Request $request){

     	// dd($request);
     	// dd($request->get('name'));
     	//  dd($request->get('emails'));
    	 //validation
       
         $this->validate($request,[
                 'name' => 'required | max:255',
                 'username' => 'required | max:255',
                 'email' => 'required|email| max:255',
                 'password' => 'required | confirmed',  
         	  ]);
      
    
     	//store users

         User::create([
                'name' => $request->name,
                'username'=> $request->username,
                'email' => $request->email,
                'password' =>Hash::make($request->password),
              ]);
     	//sign 	the  user in
          // Auth::user(); //if user sign in return user otherwise return null 
    // auth()->user();
         auth()->attempt($request->only('email','password'));
     	//redirect
   
         return redirect()->route('dashboard'); 
     }
}
