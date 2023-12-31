

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


