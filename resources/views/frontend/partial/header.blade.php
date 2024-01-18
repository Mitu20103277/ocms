   


   <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="{{route('home')}}" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Catering Management Systems</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>

                     <li><form action="{{route('food.search')}}" method="get">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>

                            <input required type="text" class="form-control" placeholder="Search..." name="search">
                          </div>
                          <div>

                            <button type="submit" class="btn btn-success">Search</button>
                          </div>
                         </form></li>

                      <li><a href="{{route('home')}}">Home</a></li>
         
          
                      
                      <li><a href="{{route('food.service')}}">Service</a></li>
        
            
                       
                  
                       <li><a href="{{route('home.food')}}">Foods</a></li>
                        <li><a href="{{route('home.package')}}">Packages</a></li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="{{route('home.category')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                               @foreach($headerCategories as $category)
                               <li>
                                    <a class="dropdown-item" href="  {{ route('foods.under.category',$category->id) }}">{{$category->category_name}}</a>
                                </li>
                              @endforeach
                            </ul>
                        </li>
                      
                        
                        
                        </ul>
                          </nav><!-- .navbar -->
        
           
    

                          </div>
                             <div class="ùser">
                            <a class="btn btn-outline-dark" href="{{route('cart.view')}}">
                            <i class="bi-cart-fill me-1"> Cart</i>
                                                           
                            <span class="badge bg-dark text-white ms-1 rounded-pill">
                                @if(session()->has('vcart'))
                                    {{ count(session()->get('vcart')) }}
                                @else
                                0
                                @endif
                            </span>
                           </a>
                        

                              @if (auth('customer')->user())   

                             <li style="list-style: none; margin-right: 20px;">{{auth('customer')->user()->full_name}}</li>
                             <a style="margin-right: 20px;" href="{{route('profile.view')}}">profile</a>
                              <a style="margin-right: 20px;" href="{{route('customer.logout')}}">Logout</a>
                              @else

                                  <a style="margin-right: 10px;" href="{{ route('customer.login') }}">Login</a>|
      
      
                                <a style="margin-right: 20px;" href="{{ route('customer.register') }}">Register</a>

                              @endif
     </div>

   
  </header>