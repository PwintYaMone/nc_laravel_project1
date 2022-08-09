<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/bootstrap.min.css')}}">
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
    
<div class="container p-4 text-white text-center bg-secondary my-4">
    <h1> CRUD Sample /Edit Page  </h1>
</div>
<div class="container my-4">
    <form action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf

    <input type="hidden" name="id" value="{{$product->id}}">
    <div class="form-group my-4">
        <input type="text" name="name" value="{{$product->name}}" class="form-control" placeholder="Product Name">
    </div>
    <div class="form-group my-4">
        <input type="text" name="price" value="{{$product->price}}" class="form-control" placeholder="Product Price">
    </div>
    <div class="form-group my-4">
        <input type="text" name="curphoto" value="{{$product->photo}}" class="form-control" placeholder="Current Photo">
    </div>
    <div class="form-group my-4">
        <input type="file" name="newphoto" class="form-control" placeholder="New Photo" >
    </div>
    <div class="form-group my-4">
       <button class="btn btn-warning"  type="submit" name="update"><i class="fa fa-diskette"></i> Update </button>
    </div>
</form>
</div>
</body>
</html>