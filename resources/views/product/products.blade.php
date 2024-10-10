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
            Crud System
            <a href="/add/products" class="btn btn-success float-end">Add Product</a>
            <a href="logout" class="btn btn-success ">Logout</a>
        </div>
        <div class="card-body">
            <table class="table table-sm table-striped table-bordered">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Type</th>
                    <th scope="col">Price</th>
                    <th scope="col">Product Added Date</th>
                    <th scope="col">Last Update</th>
                    <th scope="col" colspan="2">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    {{-- @if (count($all_users) > 0) --}}
                        @foreach ($show_products as $item)
                            <tr>
                                <td>{{$item-> id }} </td>
                                <td>{{$item-> product_name}} </td>
                                <td>{{$item-> description}} </td>
                                <td>{{$item-> type}} </td>
                                <td>{{$item-> price}} </td>
                                <td>{{$item-> created_at}} </td>
                                <td>{{$item-> updated_at}} </td>
                                <td>
                                    <a href="{{ route('edit.product' , $item-> id ) }}" class="btn btn-info">Edit</a>
                                </td>
                                <td><a href="/delete/{{$item -> id}}" class="btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach
                    {{-- @else
                    <tr>
                        <th>No data found</th>
                    </tr>
                    @endif --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
