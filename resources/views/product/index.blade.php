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
    <div class="container text-center text-white p-4 bg-secondary">
        <h1> CRUD Sample ( Index Page ) </h1>
    </div>

    <div class="container my-4">
        <a href="{{route('product.create')}}" class="btn btn-warning"> Create New Product </a>
    </div>
    @if(Session::has('message'))
    <div class="container my-4">
           @if($message= Session::get('message'))
           <div class="alert alert-warning">
               <h3> {{$message}} </h3>
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
     </div>
     @endif

    <div class="container my-4">
        <div class="row">
            <div class="col-sm-6">
                {{ $products->onEachSide(3)->links() }}
            </div>
            <div class="col-sm-6">
                <form class="form-inline" action="{{route('search')}}" method="get">
                    <div class="row">
                        <div class="col">
                            <input type="text" name="search_str" class="form-control">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-outline-danger"><i class="fa fa-search"></i>Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container my-4">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td> Id </td>
                    <td> Name </td>
                    <td> Price </td>
                    <td> Photo </td>
                    <td> Actions </td>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)

                    <tr>
                        <td> {{$product->id}} </td>
                        <td> {{$product->name}} </td>
                        <td> {{$product->price}} </td>
                        <td><img src="{{asset('images')}}/{{$product->photo}}" class="img-fluid" style="width:80px;height:80px"> </td>
                        <td> 
                            <div class="row">
                                <div class="col-auto">
                                <a href="{{route('product.edit',$product->id)}}" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit </a> &nbsp;&nbsp;
                            </div>
                            
                            <div class="col-auto">
                                <a href="{{route('product.show',$product->id)}}" class="btn btn-primary"><i class="fa fa-list"></i> Details </a> &nbsp;&nbsp;
                            </div>
                            <div class="col-auto">
                                <form class="form-inline" action="{{route('product.destroy',$product->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"> <i class="fa fa-trash"></i> Delete </button>
                                </form>
                            </div>
                            </div>
                        </td>

                    </tr>


                @endforeach
                    </tbody>
        </table>
    </div>
    <div class="container">
        {{$products->links()}}
    </div>
</body>
</html>