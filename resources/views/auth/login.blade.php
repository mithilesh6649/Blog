@extends('layouts.app')

@section('title','Register')

@section('content')
 
 <div class="container py-5">
 
 <div class="row">
   <div class="col-md-4">
   </div>
      <div class="col-md-4 shadow-lg p-5">
     @if(session()->has('status'))
     	<div class="alert alert-danger font-weight-bold" role="alert">  
       {{ session('status')}}  !
     </div>
     @endif
      <form action="{{route('login')}}" method="post">
      	@csrf 
 
    <div class="form-group">
    <label for="username">Email</label>
    <input type="email"  name="email" class="form-control" value="{{old('email')}}" placeholder="Enter Email" id="email">
     <div class="mt-1 text-danger font-weight-bold text-center">
       @error('email') <i class="fa fa-warning mr-1"></i> {{$message}} @enderror 
      </div>
  </div>
    <div class="form-group">
    <label for="pwd">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Choose a password" id="pwd">
     <div class="mt-1 text-danger font-weight-bold text-center">
       @error('password') <i class="fa fa-warning mr-1"></i> {{$message}} @enderror 
      </div>
  </div>
   
      <div class="form-group ml-4">
     <label class="form-check-label">
    <input type="checkbox" name="remember" id="remember" class="form-check-input" > <label for="remberme">Rember me</label>
  </label>
  </div>

  <button type="submit" class="btn btn-primary">Login</button>
</form>
   </div>
      <div class="col-md-4">
   </div>
 </div>

 </div>



@endsection