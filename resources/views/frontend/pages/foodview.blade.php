
<div class="container">
    <div class="row dd-flex justify-content-center">
        <div class="col-md-8">
            <div class="card px-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex flex-row align-items-center"> <i class='fa fa-apple fs-1'></i>
                         <span class="fw-bold ms-1 fs-5">{{$singlefood->food_name}}</span> </div>
                        <h1 class="fs-1 ms-1 mt-3">{{$singlefood->category_id}}</h1>
                        <div class="ms-1"> <span>{{$singlefood->price}}</span> </div>
                        <div class="ms-1"> <span>{{$singlefood->image}} </span> </div>
                        <div class="mt-5 radio-buttons"> <label class="radio"> <input type="radio" name="code" value="grey" checked> <span></span> </label> <label class="radio"> <input type="radio" name="code" value="pink"> <span></span> </label> <label class="radio"> <input type="radio" name="code" value="black"> <span></span> </label> </div>
                        <div> <button class="button"> <span>Add to Cart</span> <i class="ms-2 fa fa-long-arrow-right"></i> </button> </div>
                    </div>
                    <div class="col-md-6">
                        <div class="food-image"> <img src="{{url('/uploads/'.$singlefood->image)}}"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



