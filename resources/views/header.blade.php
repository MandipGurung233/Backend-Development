<header class="contact-detail container-fluid">
    <div class="contact" style="display:flex;">
    <div class="phone">
        <i class="fa fa-phone-square" aria-hidden="true"></i>
        <a href="" style="color: black;">02-5452000</a>
    </div>
    <div class="email">
        <i class="fa fa-envelope" aria-hidden="true"></i>
        <a href="" style="color: black;">info@school.com.np</a>
    </div>
    </div>
</header>

<!--heading-->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
<div class="container">
  <a class="navbar-brand" href="/">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto w-100 justify-content-end">
      <li class="nav-item">
        <a class="nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Course</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Event</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      
      
      
      @if(Session::has('user'))
        <li class="nav-item">
            <a class="nav-link" href="">{{ Session::get('user')['name'] }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/logout">Logout</a>
        </li>

      @else
        <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/register">Register</a>
        </li>
      @endif
   
      
    </ul>
  </div>
</div>
</nav>