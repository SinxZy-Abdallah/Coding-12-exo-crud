<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  rel="stylesheet"  href="/css/app.css"> 
    <link  rel="stylesheet"  href="/css/style.css"> 
    <title>ADMIN</title>
</head>
<body>
    <header id="header">
        <div class="container">
      
          <div id="logo" class="pull-left">
            <a href="#hero"><img src="img/" alt="" title="" /></img></a>
            <!-- Uncomment below if you prefer to use a text image -->
            <!--<h1><a href="#hero">Header 1</a></h1>-->
          </div>     
          <!-- #nav-menu-container -->
      
 <nav id="nav-menu-container text-center">
    <ul class="nav-menu">
        <li class="menu-active"></li>
          <li><a href="/">Home</a></li>
          <li><a href="/aboutedit">About Us</a></li>
          <li><a href="/servicedit">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#testimonials">Testimonials</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact Us</a></li>
              {{-- <li class="menu-has-children"><a href="">Drop Down</a>
                <ul>
                  <li><a href="#">Drop Down 1</a></li> --}}
          </ul>
</nav>
</header>
<div>
{{-- <h1 class="text-center mt-5">Page Administration</h1> --}}
</div>



@yield('content')


</body>
</html>