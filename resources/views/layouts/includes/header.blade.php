<header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="https://i.pravatar.cc/400" alt="logo" style="width:50px;border-radius:50%;">
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('post')}}">Post</a>
    </li>
  </ul>
{{--   Both code are same 
    <ul class="navbar-nav ml-auto">
     @if(auth()->user())
    <li class="nav-item">
      <a class="nav-link" href="#">Mithilesh</a>
    </li>
      <li class="nav-item">
      <a class="nav-link" href="#">Logout</a>
     </li>
     @else
       
    <li class="nav-item">
      <a class="nav-link" href="{{route('login')}}">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('register')}}">Register</a>
    </li>
     @endif
  </ul>  
 --}} 
 

     <ul class="navbar-nav ml-auto">
     @auth
    <li class="nav-item">
      <a class="nav-link" href="#">{{ auth()->user()->username }}</a>
    </li>
      <li class="nav-item">
      <a class="nav-link" href="{{route('logout')}}">Logout</a>
     </li>
     @endauth
     @guest
    <li class="nav-item">
      <a class="nav-link" href="{{route('login')}}">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('register')}}">Register</a>
    </li>
     @endguest
  </ul> 

</nav>

</header>