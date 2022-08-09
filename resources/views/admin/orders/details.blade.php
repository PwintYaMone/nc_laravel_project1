
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
    <script src="{{asset('fontawesome/js/all.min.js')}}"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>

@import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');body{background-color: #eeeeee;font-family: 'Open Sans',serif}.container{margin-top:50px;margin-bottom: 50px}.card{position: relative;display: -webkit-box;display: -ms-flexbox;display: flex;-webkit-box-orient: vertical;-webkit-box-direction: normal;-ms-flex-direction: column;flex-direction: column;min-width: 0;word-wrap: break-word;background-color: #fff;background-clip: border-box;border: 1px solid rgba(0, 0, 0, 0.1);border-radius: 0.10rem}.card-header:first-child{border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0}.card-header{padding: 0.75rem 1.25rem;margin-bottom: 0;background-color: #fff;border-bottom: 1px solid rgba(0, 0, 0, 0.1)}.track{position: relative;background-color: #ddd;height: 7px;display: -webkit-box;display: -ms-flexbox;display: flex;margin-bottom: 60px;margin-top: 50px}.track .step{-webkit-box-flex: 1;-ms-flex-positive: 1;flex-grow: 1;width: 25%;margin-top: -18px;text-align: center;position: relative}.track .step.active:before{background: #FF5722}.track .step::before{height: 7px;position: absolute;content: "";width: 100%;left: 0;top: 18px}.track .step.active .icon{background: #ee5435;color: #fff}.track .icon{display: inline-block;width: 40px;height: 40px;line-height: 40px;position: relative;border-radius: 100%;background: #ddd}.track .step.active .text{font-weight: 400;color: #000}.track .text{display: block;margin-top: 7px}.itemside{position: relative;display: -webkit-box;display: -ms-flexbox;display: flex;width: 100%}.itemside .aside{position: relative;-ms-flex-negative: 0;flex-shrink: 0}.img-sm{width: 80px;height: 80px;padding: 7px}ul.row, ul.row-sm{list-style: none;padding: 0}.itemside .info{padding-left: 15px;padding-right: 7px}.itemside .title{display: block;margin-bottom: 5px;color: #212529}p{margin-top: 0;margin-bottom: 1rem}.btn-warning{color: #ffffff;background-color: #ee5435;border-color: #ee5435;border-radius: 1px}.btn-warning:hover{color: #ffffff;background-color: #ff2b00;border-color: #ff2b00;border-radius: 1px}
</style>
</head>
<body>
    
<div class="container text-white text-center bg-secondary p-4 mb-4 mt-4">
    <h1> PRACTICE 1(Details Page) </h1>
</div>

<div class="container">
        @if(Session::has('success'))
        <div class="alert alert-danger">
            {{Session::get('success')}}
        </div>
        @endif
</div>   

<div class="container">
<div class="container">
    <article class="card">
        <header class="card-header"> My Orders / Tracking </header>
        <div class="card-body">
            <h6>Order ID: OD45345345435</h6>
            <article class="card">
                <div class="card-body row">
                    <div class="col"> <strong>Estimated Delivery time:</strong> <br>29 nov 2019 </div>
                    <div class="col"> <strong>Shipping BY:</strong> <br> BLUEDART, | <i class="fa fa-phone"></i> +1598675986 </div>
                    <div class="col"> <strong>Status:</strong> <br> Picked by the courier </div>
                    <div class="col"> <strong>Tracking #:</strong> <br> BD045903594059 </div>
                </div>
            </article>
            <div class="track">
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Order confirmed</span> </div>
                <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text"> Picked by courier</span> </div>
                <div class="step"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text"> On the way </span> </div>
                <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span> <span class="text">Ready for pickup</span> </div>
            </div>
            <hr>
            <ul class="row">
                <li class="col-md-4">
                    <figure class="itemside mb-3">
                        <div class="aside"><img src="https://i.imgur.com/iDwDQ4o.png" class="img-sm border"></div>
                        <figcaption class="info align-self-center">
                            <p class="title">Dell Laptop with 500GB HDD <br> 8GB RAM</p> <span class="text-muted">$950 </span>
                        </figcaption>
                    </figure>
                </li>
                <li class="col-md-4">
                    <figure class="itemside mb-3">
                        <div class="aside"><img src="https://i.imgur.com/tVBy5Q0.png" class="img-sm border"></div>
                        <figcaption class="info align-self-center">
                            <p class="title">HP Laptop with 500GB HDD <br> 8GB RAM</p> <span class="text-muted">$850 </span>
                        </figcaption>
                    </figure>
                </li>
                <li class="col-md-4">
                    <figure class="itemside mb-3">
                        <div class="aside"><img src="https://i.imgur.com/Bd56jKH.png" class="img-sm border"></div>
                        <figcaption class="info align-self-center">
                            <p class="title">ACER Laptop with 500GB HDD <br> 8GB RAM</p> <span class="text-muted">$650 </span>
                        </figcaption>
                    </figure>
                </li>
            </ul>
            <hr>
            <a href="#" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Back to orders</a>
        </div>
    </article>
</div>
</div>

<div class="container">
   <div class="row">
        <div class="col-lg-4 mb-5 mb-lg-0 wow fadeIn">
        
        <div class="card border-0 shadow p-5">
                  <button class="btn btn-success btn-lg mb-3 form-control"> Order Tracking </button> <br>
                  @if($order->order_confirm==1)
                  <button class="btn btn-secondary mb-3 form-control"><i class="fa fa-check-circle"></i> Order Confirmed </button> <br>
                  @else
                  <a href="{{route('ordertracking.update1',$order->id)}}" class="btn btn-danger mb-3 form-control"> Order Confirmed </a> <br>
                  @endif

                  @if($order->pickedbycourier==1)
                  <button class="btn btn-secondary mb-3 form-control"><i class="fa fa-check-circle"></i> Order Shipped </button> <br>
                  @else
                  <a href="{{route('ordertracking.update2',$order->id)}}" class="btn btn-danger mb-3 form-control"> Order Shipped </a> <br>
                  @endif
                 
                  @if($order->ontheway==1)
                  <button class="btn btn-secondary mb-3  form-control"><i class="fa fa-check-circle"></i> Order On the way </button> <br>
                  @else
                  <a href="{{route('ordertracking.update3',$order->id)}}" class="btn btn-danger mb-3  form-control"></i> Order On the way </a> <br>
                  @endif

                  @if($order->readyforpickup==1)
                  <button class="btn btn-secondary mb-3  form-control"><i class="fa fa-check-circle"></i> Order Arrived </button> <br>
                  @else
                  <a href="{{route('ordertracking.update4',$order->id)}}" class="btn btn-danger mb-3  form-control"> Order Arrived </a> <br>
                  @endif
         </div>          
      </div>
     
      <div class="col-lg-8">
            <div class="card border-0 shadow p-5">
            <ul class="list-group list-group-flush">
            <li class="list-group-item active"><b>Order Info</b></li>
            <li class="list-group-item">
                <i class="fa fa-check-circle"></i> <b>Order No:</b>#{{$order->id}}
            </li>
                  
            <li class="list-group-item"> <i class="fa fa-check-circle"></i>Customer Name: <b>{{$order->customer_name}}</li>
            <li class="list-group-item"> <i class="fa fa-check-circle"></i> Customer Email:<b>{{$order->customer_email}}</li>
            <li class="list-group-item"> <i class="fa fa-check-circle"></i> Customer Phone No:<b>{{$order->customer_phoneno}}</li>
            <li class="list-group-item"> <i class="fa fa-check-circle"></i> Customer City:<b>{{$order->customer_city}}</li>
            <li class="list-group-item"> <i class="fa fa-check-circle"></i>Customer Address: <b>{{$order->customer_address}}</li>

            <li class="list-group-item active"><b>Shipping Info</b></li>

            <li class="list-group-item"> <i class="fa fa-check-circle"></i> Shipping Name:<b> {{$order->shipping_name}}</li>
            <li class="list-group-item"> <i class="fa fa-check-circle"></i> Shipping Email:<b>{{$order->shipping_email}}</li>
            <li class="list-group-item"> <i class="fa fa-check-circle"></i> Shipping Phone NO:<b>{{$order->shipping_phoneno}}</li>
            <li class="list-group-item"> <i class="fa fa-check-circle"></i>Shipping City :<b>{{$order->shipping_city}}</li>
            <li class="list-group-item"> <i class="fa fa-check-circle"></i>Shipping Address :<b>{{$order->shipping_address}}</li>
          </ul>
          </div>
</div>
</div>   
</div>
</div>

<div class="container-fluid bg-dark p-2 text-center text-white mt-5">
    Copy Rights &copy; ALl Rights Reserved. 2022
</div>

<!-- Modal -->
<div class="modal fade" id="orderconfirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> (1) Ordered Confirmed </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form action="{{route('ordertracking.update1,$order->id')}}" method="post">
            @csrf
       
      <div class="mb-3">
   <label class="form-label">Delivery Time</label>
    <input type="date" name="delivery_time" class="form-control" id="" placeholder="Delivery Time">
   </div>
      


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning">Order Confirmed Update</button>
      </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="pickerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> (2) Picked By Courier </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form action="{{route('ordertracking.update2,$order->id')}}" method="post">
            @csrf
       
      <div class="mb-3">
   <label class="form-label">Delivery Person Name</label>
    <input type="text" name="courier_name" class="form-control" id="" placeholder="Courier Name">
   </div>
      <div class="mb-3">
      <label  class="form-label"> Phone No</label>
      <input type="text" name="courier_phone" class="form-control" id="" placeholder="Phone No">
      </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning">Picked by Courier Update</button>
      </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="onthewayModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> (3) On the Way </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form action="{{route('ordertracking.update3,$order->id')}}" method="post">
            @csrf
       
      <div class="mb-3">
   <label class="form-label">Delivery Person Name</label>
    <input type="text" name="courier_name" class="form-control" id="" placeholder="Courier Name">
   </div>
      


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning">On the Way Update</button>
      </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="readypickupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> (4) Ready for Pick Up </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form action="{{route('ordertracking_update4',$order->id)}}" method="post">
            @csrf
       
      <div class="mb-3">
   <label class="form-label">Tracking</label>
    <input type="text" name="tracking" class="form-control" id="" placeholder="Tracking
   </div>
      


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning">Ready Pick Up Update</button>
      </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>

