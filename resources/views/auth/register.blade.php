@extends('layouts.app')

@section('title','Register')

@section('content')
 
 <div class="container py-5">
 
 <div class="row">
   <div class="col-md-4">
   </div>
      <div class="col-md-4 shadow-lg p-5">
      <form action="{{route('register')}}" method="post">
      	@csrf 
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control @error('name') border-danger @enderror" value="{{old('name')}}" name="name" placeholder="Enter name" id="name">
    
      <div class="mt-1 text-danger font-weight-bold text-center">
       @error('name') <i class="fa fa-warning mr-1"></i> {{$message}} @enderror 
      </div>
    
  </div>
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username" value="{{old('username')}}"  placeholder="Enter username" id="username">
     <div class="mt-1 text-danger font-weight-bold text-center">
       @error('username') <i class="fa fa-warning mr-1"></i> {{$message}} @enderror 
      </div>
  </div>
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
    <div class="form-group">
    <label for="pwd">Password again</label>
    <input type="password" name="password_confirmation" class="form-control" placeholder="Repeat  password" id="pwd">
  </div>
 
  <button type="submit" class="btn btn-primary">Register</button>
</form>
   </div>
      <div class="col-md-4">
   </div>
 </div>

 </div>



@endsection