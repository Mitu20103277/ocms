   


   <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Catering Management Systems</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{route('home')}}">Home</a></li>
          <li><a href="">Categories</a></li>
          <li><a href="">Foods</a></li>
          <li><a href="{{route('home.package')}}">Packages</a></li>

          
          
        </ul>
      </nav><!-- .navbar -->
      
    </div>
    <div class="ùser">
      
      @if (auth('customer')->user())   

        <li style="list-style: none; margin-right: 20px;">{{auth('customer')->user()->full_name}}</li>
         <a style="margin-right: 20px;" href="{{route('customer.logout')}}">Logout</a>
      @else

      <a style="margin-right: 10px;" href="{{ route('customer.login') }}">Login</a>|
      <a style="margin-right: 20px;" href="{{ route('customer.register') }}">Register</a>

      @endif
   </div>

   
  </header>