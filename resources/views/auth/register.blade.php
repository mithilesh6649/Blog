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
    <input type="text" class="form-control" name="name" placeholder="Enter name" id="name">
  </div>
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" placeholder="Enter username" id="username">
  </div>
    <div class="form-group">
    <label for="pwd">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Choose a password" id="pwd">
  </div>
    <div class="form-group">
    <label for="pwd">Password again</label>
    <input type="password" name="password_con" class="form-control" placeholder="Repeat  password" id="pwd">
  </div>
 
  <button type="submit" class="btn btn-primary">Register</button>
</form>
   </div>
      <div class="col-md-4">
   </div>
 </div>

 </div>



@endsection