<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crud</title>
</head>
<body>
    <div class="container">
        <div class="card-header ">
            <h1>Registration Page</h1>
            <div><a href="login" class="btn btn-success float-end">Log In</a></div> <br><br>


            <div class="card-body">
                <form class="row g-3" action="{{route('post.Register')}}" method="POST" >
                    @csrf
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-control" id="inputEmail4">
                      </div>
                      <div class="col-md-6">
                        <label for="inputNumber4" class="form-label">Mobile No</label>
                        <input type="Number" name="mobile_no" class="form-control" id="inputNumber4">
                      </div>
                    <div class="col-md-10">
                      <label for="inputEmail4" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-10">
                      <label for="inputPassword4" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-10">
                      <label for="inputAddress" class="form-label">Confirm Pasword</label>
                      <input type="password" name="confirm_password" class="form-control" id="inputconfirmpassword" placeholder="Confirm Password">
                    </div>




                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                  </form>
            </div>
        </div>

    </div>
</body>
</html>
