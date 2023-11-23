<div class="container mt-5 mb-5">
    <h1 class="text-center"><b>All Foods</b></h1>
    <hr>
    <div class="row mb-3">
        @foreach ($foods as $food)
       
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ url('/uploads/',$food->image) }}" alt="image">
                <div class="card-body">
                    <p class="card-text">{{ $food->food_name }}</p>
                    <div class="badge p-3 bg-danger"><span>Price : </span>{{ $food->price }} <span>Taka.</span></div>
                </div>
                </div>
            </div>
            @endforeach
    </div>
</div>