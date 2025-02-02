<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Edit  Product</div>
            @if (Session::has('fail'))
                <span class="alert alert-danger p-2">{{Session::get('fail')}}</span>
            @endif
            <div class="card-body">
                <form action="{{ route('update.product')}}" method="post">
                    @csrf
                    <input type="hidden" name="product_id" id="" value="{{$product->id}}">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Product_name</label>
                        <input type="text" name="product_name" value="{{$product->product_name}}" class="form-control" id="formGroupExampleInput" placeholder="Enter Full Name">
                        @error('product_name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Description</label>
                        <input type="text" name="description" class="form-control" value="{{$product->description}}" id="formGroupExampleInput2" placeholder="Enter Email">
                        @error('description')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Type</label>
                        <input type="text" name="type" value="{{$product->type}}" class="form-control" id="formGroupExampleInput2" placeholder="Enter Phone Number">
                        @error('type')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Price</label>
                        <input type="number" name="price" value="{{$product->price}}" class="form-control" id="formGroupExampleInput2" placeholder="Enter Phone Number">
                        @error('price')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>

                </form>

            </div>
        </div>
    </div>
</body>
</html>
