<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
    
<div class="container p-4 text-white text-center bg-secondary my-4">
    <h1> CRUD Sample /Create Page  </h1>
</div>
<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
</div>
<div class="container my-4">
    <div class="row">
        <div class="col text-center p-4">
            <i class="fa fa-list" style="font-size:100px;color:orange;"></i>
        </div>
        <div class="col">
    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
        @csrf

    <div class="form-group my-4">
        <input type="text" name="name" class="form-control" placeholder="Product Name">
    </div>
    <div class="form-group my-4">
        <input type="text" name="price" class="form-control" placeholder="Product Price">
    </div>
    <div class="form-group my-4">
        <input type="file" name="photo" class="form-control" >
    </div>
    <div class="form-group my-4">
       <button class="btn btn-warning" type="submit"><i class="fa fa-diskette"></i> Save </button>
    </div>
</form>
</div>
</div>
</div>
</body>
</html>