<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Add Product
            </div>
                <div class="card-body">
                    <form action="{{route('PostProduct')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Product name</label>
                            <input name="product_name" type="text" class="form-control"  id="formGroupExampleInput" placeholder="Enter Product name">
                        @error('product_name')
                            <span class="text-danger">{{$message}} </span>
                        @enderror
                        </div>
                          <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Description</label>
                            <input name="description" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter Description">
                            @error('description')
                            <span class="text-danger">{{$message}} </span>
                        @enderror
                        </div>
                          <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Type</label>
                            <input name="type" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter Type of product">
                            @error('type')
                            <span class="text-danger">{{$message}} </span>
                        @enderror
                        </div>
                          <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Price</label>
                            <input name="price" type="number" class="form-control" id="formGroupExampleInput2" placeholder="Enter Price">
                            @error('price')
                            <span class="text-danger">{{$message}} </span>
                        @enderror
                        </div>

                          <button type="submit" class="btn btn-primary">Save</button>
                    </form>

            </div>
        </div>
    </div>
</body>
</html>
