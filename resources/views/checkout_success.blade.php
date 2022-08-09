<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

  <script src="{{asset('front_template/js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('front_template/js/bootstrap.js')}}"></script>
  <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}"> 

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('front_template/css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{asset('front_template/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('front_template/css/all.min.css')}}" rel="stylesheet" />
</head>
<body>
    <!-- Topbar Start -->
    <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="{{route('welcome')}}">
            <img src="{{asset('front_template/images/logo.png')}}" alt="" /><span>
              Zezmon
            </span>
          </a>

          <div class="navbar-collapse" id="">
            <div class="container">
              <div class=" mr-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav justify-content-between ">
                  <div class="d-none d-lg-flex">
                    <li class="nav-item">
                      <a class="nav-link" href="fruit.html">
                        Customer Number : 01234567890</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="service.html">
                        Demo@gmail.com
                      </a>
                    </li>
                  </div>
                  <div class=" d-none d-lg-flex">
                  <li class="nav-item">
                      <a class="nav-link" href="{{route('cart')}}">
                        <i class="fa fa-shopping-cart"></i> Shop Items<span class="badge bg-secondary">{{ count((array) session('cart')) }} </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <form class="inline-form" action="{{route('logout')}}" method="post">
                        @csrf
                     <button type="submit" class="btn btn-flat btn-sm"><i class="fa fa-sign-in"></i>Logout</button>
                      </form>
                    </li>
                    <form class="form-inline my-2 ml-5 mb-3 mb-lg-0">
                      <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                    </form>
                  </div>
                </ul>
              </div>
            </div>

            <div class="custom_menu-btn">
              <button onclick="openNav()"></button>
            </div>
            <div id="myNav" class="overlay">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <div class="overlay-content">
                <a href="index.html">HOME</a>
                <a href="product.html">PRODUCTS</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    @if(Session::has('success'))
    <div class="container bg-success p-4 text-center">
      {{session::get('success')}}
    </div>
    @endif
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container-fluid">
                  <div class="row">
                    <div class="offset-md-2 col-md-4">
                      <div class="slider_item-detail">
                        <div>
                          <h2 class="slider_heading">
                            50% OFF <br />
                            First order
                          </h2>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nis
                          </p>
                          <div class="d-flex">
                            <a href="" class="slider_btn">
                              Order Now
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="hero_img-box">
                        <img src="{{asset('front_template/images/hero.png')}}" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container-fluid">
                  <div class="row">
                    <div class="offset-md-2 col-md-4">
                      <div class="slider_item-detail">
                        <div>
                          <h2 class="slider_heading">
                            50% OFF <br />
                            First order
                          </h2>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nis
                          </p>
                          <div class="d-flex">
                            <a href="" class="slider_btn">
                              Order Now
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="hero_img-box">
                        <img src="{{asset('front_template/images/hero.png')}}" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="slider_item-box">
              <div class="slider_item-container">
                <div class="container-fluid">
                  <div class="row">
                    <div class="offset-md-2 col-md-4">
                      <div class="slider_item-detail">
                        <div>
                          <h2 class="slider_heading">
                            50% OFF <br />
                            First order
                          </h2>
                          <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nis
                          </p>
                          <div class="d-flex">
                            <a href="" class="slider_btn">
                              Order Now
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="hero_img-box">
                        <img src="{{asset('front_template/images/hero.png')}}" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>

    <!-- end slider section -->
  </div>  

    <!-- Checkout Start -->
    <div class="container p-5">
      
      <h1>Order STATUS</h1>      
        <div class="row col-lg--12 ord-addr-info">
          <?php if(!empty($order)){?>
            <div class="col-md-12">
              <div class="alert alert-success">Your Order has been placed successfully.</div>

          </div>
          <div class="row col-lg-12 ord-addr-info">
          <div class="hdr"></div>
          <ul class="list-group list-group-flush">
          <li class="list-group-item active"><b>Order Info</b></li>
            <li class="list-group-item">
                <i class="fa fa-check-circle"></i> <b>Order No:</b>#{{$order->id}}
          </li>
          <li class="list-group-item">
                <i class="fa fa-check-circle"></i> <b>Total:</b>#{{$order->grand_total}}
          </li>
          <li class="list-group-item">
                <i class="fa fa-check-circle"></i> <b>Order Date:</b>#{{$order->created}}
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
          <div class="row col-lg-12 mt-5">
            <h2> <i class="fa fa-check-circle"></i>Shopped List</h2>
            <table class="table table-hover cart">
              <thead>
                <tr>
                  <th width="10%">Image</th>
                  <th width="10%">Product</th>
                  <th width="10%">Price</th>
                  <th width="10%">Qty</th>
                  <th width="10%">Sub Total</th>
                  
          </tr>
          </thead>
          <tbody>
            <?php $total=0;?>
            <?php $subtotal=0;?>
            @foreach($carts as $id=>$item)
            <tr>
                  <th width="10%"><img src="{{asset('images')}}/{{$item['photo']}}" class="img-fluid img-thumbnail" style="width:100px;height:100px;"></th>
                  <th width="10%">{{$item['name']}}</th>
                  <th width="10%">{{$item['price']}}</th>
                  <th width="10%">{{$item['qty']}}</th>
                  <th width="10%">{{$item['price'] * $item['qty']}}</th>
            </tr>
            <?php $subtotal=$item['price'] * $item['qty'];?>
            <?php $total=$total+$subtotal;?>
            @endforeach
            <tr class="bg-warning">
              <td colspan="4">Grand Total</td>
              <td>{{$total}}</td>
          </tr>
            </tbody>
            </table>

</div>
<div class="col-mb-2">
  <div class="row">
    <div class="col-sm-12 col-md-6">
      <a href="{{route('welcome')}}" class="btn btn-block btn-primary"><i class="ialeft"></i>Continue Shopping</a>
          </div>
          </div>
          </div>
          <?php } else {?>
           <div class="col-md-12">
            <div class="alert alert-danger">Your Order submission failed</div>
          </div>
          <?php }?>
          </div>
          </div>


    <!-- Checkout End -->


    <!-- Footer Start -->
   
  <!-- end sign section -->
  <div class="container-fluid">
  <section class="sign_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <h3>
            Sign up for Newsletter
          </h3>
          <p>
            There are many variations of passages of Lorem Ipsum available,
            but the majority have suffered
          </p>
        </div>
        <div class="col-md-7">
          <form action="">
            <input type="email" placeholder="Enter your email" />
            <button>
              Sign Up
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end sign section -->

  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="container links_container">
      <div class="row ">
        <div class="col-md-3">
          <h3>
            CUSTOMER SERVICE
          </h3>
          <ul>
            <li>
              <a href="">
                International Help
              </a>
            </li>
            <li>
              <a href="">
                Contact Customer Care
              </a>
            </li>
            <li>
              <a href="">
                Return Policy
              </a>
            </li>
            <li>
              <a href="">
                Privacy Policy
              </a>
            </li>
            <li>
              <a href="">
                Shipping Information
              </a>
            </li>
            <li>
              <a href="">
                Promotion Terms
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h3>
            LET US HELP YOU
          </h3>
          <ul>
            <li>
              <a href="">
                Your Account
              </a>
            </li>
            <li>
              <a href="">
                Your Orders
              </a>
            </li>
            <li>
              <a href="">
                Shipping Rates & Policies
              </a>
            </li>
            <li>
              <a href="">
                Amazon Prime
              </a>
            </li>
            <li>
              <a href="">
                Returns & Replacements
              </a>
            </li>
            <li>
              <a href="">
                Help
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h3>
            INFORMATION
          </h3>
          <ul>
            <li>
              <a href="">
                About Us
              </a>
            </li>
            <li>
              <a href="">
                Careers
              </a>
            </li>
            <li>
              <a href="">
                Sell on shop
              </a>
            </li>
            <li>
              <a href="">
                Press & News
              </a>
            </li>
            <li>
              <a href="">
                Competitions
              </a>
            </li>
            <li>
              <a href="">
                Terms & Conditions
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h3>
            OUR SHOP
          </h3>
          <ul>
            <li>
              <a href="">
                Daily Deals
              </a>
            </li>
            <li>
              <a href="">
                App Only Deals
              </a>
            </li>
            <li>
              <a href="">
                Our Hottest Products
              </a>
            </li>
            <li>
              <a href="">
                Gift Vouchers
              </a>
            </li>
            <li>
              <a href="">
                Trending Product
              </a>
            </li>
            <li>
              <a href="">
                Hot Flash Sale
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="follow_container">
        <div class="row">
          <div class="col-md-9">
            <div class="app_container">
              <h3>
                DOWNLOAD OUR APPS

              </h3>
              <div>
                <img src="{{asset('front_template/images/google-play.png')}}" alt="">
                <img src="{{asset('front_template/images/apple-store.png')}}" alt="">
              </div>
            </div>
          </div>
          <div class="col-md-3 ">
            <div class="info_social">
              <div>
                <a href="">
                  <img src="{{asset('front_template/images/fb.png')}}" alt="">
                </a>
              </div>
              <div>
                <a href="">
                  <img src="{{asset('front_template/images/twitter.png')}}" alt="">
                </a>
              </div>
              <div>
                <a href="">
                  <img src="{{asset('front_template/images/linkedin.png')}}" alt="">
                </a>
              </div>
              <div>
                <a href="">
                  <img src="{{asset('front_template/images/instagram.png')}}" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2019 All Rights Reserved By
     
    </p>
  </section>
</div>
  <!-- footer section -->

  <script type="text/javascript" src="{{asset('front_template/jquery-3.4.1.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('front_template/js/bootstrap.js')}}"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>
  
</body>
</html>
<?php
unset($_SESSION['cart']);
?>