<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
<div class="container">
          @if (session()->has('message'))
              <p class="alert-alert-danger">{{session()-get('message')}}</p>
              @endif
            <div class="row mt-5"> 
              <div class="col-md-6 offset-md-3">
                <div class="card p-3">
                  <h3 class="text-center"><strong>Login Form</strong></h3>
                  <hr>
                  <div class="card-body">
                      <form action="{{route('login.post')}}" method="post">
                          @csrf

                      <div class="mb-3">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="enter your email">
                      </div>

                      <div class="mb-3">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="enter your password">
                      </div>
                      <button style="float: right;" class="btn btn-primary px-3" type="submit">Login</button>

                    </form>
                  </div>
                </div>
              </div>
            </div>
</div>
        

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>