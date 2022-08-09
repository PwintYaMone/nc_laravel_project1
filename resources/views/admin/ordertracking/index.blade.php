<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    @include('admin.inc.header')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
   
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <style>

     @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
     body{
        background-color: #eeeeee;
        font-family: 'Open Sans',serif
    }
    .container{
        margin-top:50px;
        margin-bottom: 50px
    }
    .card{position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;-webkit-box-orient:vertical;-webkit-box-direction: normal;-ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 0.10rem
    }
    .card-header:first-child{
        border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0
    }
    .card-header{
        padding: 0.75rem 1.25rem;
        margin-bottom: 0;
        background-color: #fff;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1)
    }
    .track{position: relative;
        background-color: #ddd;
        height: 7px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin-bottom: 60px;
        margin-top: 50px
    }
    .track .step{
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        width: 25%;
        margin-top: -18px;
        text-align: center;
        position: relative
    }
    .track .step.active:before{
        background: #FF5722
    }
    .track .step::before{
        height: 7px;
        position: absolute;
        content: "";
        width: 100%;
        left: 0;
        top: 18px
    }
    .track .step.active .icon{
        background: #ee5435;
        color: #fff
    }
    .track .icon{
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        position: relative;
        border-radius: 100%;
        background: #ddd
    }
    .track .step.active .text{
        font-weight: 400;
        color: #000
    }
    .track .text{
        display: block;
        margin-top: 7px
    }
    .itemside{
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        width: 100%
    }
    .itemside .aside{
        position: relative;
        -ms-flex-negative: 0;
        flex-shrink: 0
    }
    .img-sm{
        width: 80px;
        height: 80px;
        padding: 7px
    }
    ul.row, ul.row-sm{
        list-style: none;
        padding: 0
    }
    .itemside .info{
        padding-left: 15px;
        padding-right: 7px
    }
    .itemside .title{
        display: block;
        margin-bottom: 5px;
        color: #212529
    }
    p{
        margin-top: 0;
        margin-bottom: 1rem
    }
    .btn-warning{
        color: #ffffff;
        background-color: #ee5435;
        border-color: #ee5435;
        border-radius: 1px
    }
    .btn-warning:hover{
        color: #ffffff;
        background-color: #ff2b00;
        border-color: #ff2b00;
        border-radius: 1px
    }
    </style>

  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">

      <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home > Order Tracking</a>
        </li>
        
      </ul>
      <ul class="navbar-nav mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="#" role="button">
           <i class="fa fa-user-circle" style="font-size:16px;"> Admin </i> 
          </a>
         
        </li>
      </ul>
    </div>
  </div>
</nav>
      
      </header>
      <!-- Left side column. contains the logo and sidebar -->
        @include('admin.inc.aside')

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header text-right " style="padding:50px">
       
            <!-- Order Tracking -->

            
  
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
                <div class="step <?php $order->order_confirm==1 ? 'active':''; ?>"><a href="#"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Order confirmed</span> </a> </div>
                <div class="step <?php $order->pickedbycourier==1 ? 'active':''; ?>"><a href="#"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text"> Picked by courier</span> </a>  </div>
                <div class="step <?php $order->ontheway==1 ? 'active':''; ?> "><a href="#"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text"> On the way </span>  </a> </div>
                <div class="step <?php $order->readyforpickup==1 ? 'active':''; ?>"><a href="#"> <span class="icon"> <i class="fa fa-box"></i> </span> <span class="text">Ready for pickup</span> </a>  </div>
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


            <!-- Order Tracking -->
        </section>
    </div>

    
      @include('admin.inc.footer')
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    @include('admin.inc.js_lib')
   
</body>
</html>