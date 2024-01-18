<section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
     <div class="">
      <section id="hero" class="">
     <h2 data-aos="fade-up"> Private orders for more than 100 persons need to be placed (confirmed) 3 days in advance of the coorporate<br>Large orders (300+) need to be confirmed 7 days in advance</h2>
     </section>
     <a class="btn btn-success" href="{{route('refund.policy')}}">CANCELLATIONS & REFUNDS POLICY</a>
     </div>
      <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Enjoy Your Healthy<br>Delicious Food</h2>
          <p data-aos="fade-up" data-aos-delay="100"></p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
          
          
            <!-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
          </div>
        </div>
      
      <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
        <img src="{{ asset('frontend') }}/assets/img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
      </div>
      
</div>
    </div>
       

     </div>
 </section>

<div class="container mt-5 mb-5">
    <h1 class="text-center"><b>All Foods</b></h1>
    <hr>
    <div class="row mb-3">

        @foreach ($foods as $food)

        <div class="col-md-3">
            <div class="card" style="width: 18rem;">

                <a href="{{route('single.food',$food->id)}}">
                    <img class="w-100" src="{{ url('/uploads/',$food->image) }}" alt="image" height="200">
                    <div class="card-body">
                        <p class="card-text">{{ $food->food_name }}</p>
                        <p class="card-text">{{ $food->category->category_name }}</p>
                        <div class="badge p-3 bg-danger"><span>Price : </span>{{ $food->price }} <span>Taka.</span></div>
                    </div>
                   

                </a>
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('add.toCart',$food->id)}}">Add tocart</a></div>

                </div>
            </div>
         </div>
        @endforeach
    </div>
</div>


