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
    <div class="container-fluid pt-5">
      <form action="{{route('order.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div class="mb-4">
                    <h4 class="font-weight-semi-bold mb-4">Billing Address</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Full Name</label>

                            <input class="form-control"  type="text"  name="customer_name"  placeholder="John">
                            @error('customer_name')
                            <div class="alert alert-danger text-center text-white p-1">
                              {{$message}}
                            </div>
                            @enderror

                        </div>
                      
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="email"  name="customer_email" placeholder="example@email.com">
                            @error('customer_email')
                            <div class="alert alert-danger text-center text-white p-1">
                              {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" type="text"  name="customer_phoneno" placeholder="+123 456 789">
                            @error('customer_phoneno')
                            <div class="alert alert-danger text-center text-white p-1">
                              {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label> Customer City</label>
                            <input class="form-control" type="text" name="customer_city" placeholder="City">
                            @error('customer_city')
                            <div class="alert alert-danger text-center text-white p-1">
                              {{$message}}
                            </div>
                            @enderror
                        </div>
                      
                        <div class="col-md-6 form-group">
                            <label>Customer Address</label>
                            <textarea class="form-control" name="customer_address" rows="5"></textarea>
                            @error('customer_address')
                            <div class="alert alert-danger text-center text-white p-1">
                              {{$message}}
                            </div>
                            @enderror
                        </div>                      
                    </div>
                </div>
                <div class="container mb-4" id="shipping-address">
                    <h4 class="font-weight-semi-bold mb-4">Shipping Address</h4>

                    <div class="row">

                        <div class="col-md-6 form-group">
                            <label>Full Name</label>
                            <input class="form-control" type="text"  name="shipping_name" placeholder="John">
                            @error('shipping_name')
                            <div class="alert alert-danger text-center text-white p-1">
                              {{$message}}
                            </div>
                            @enderror
                        </div>
                       
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="email"  name="shipping_email" placeholder="example@email.com">
                            @error('shipping_email')
                            <div class="alert alert-danger text-center text-white p-1">
                              {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" type="text"  name="shipping_phoneno" placeholder="+123 456 789">
                            @error('shipping_phoneno')
                            <div class="alert alert-danger text-center text-white p-1">
                              {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <label>City</label>
                            <input class="form-control" type="text"  name="shipping_city" placeholder="City">
                            @error('shipping_city')
                            <div class="alert alert-danger text-center text-white p-1">
                              {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                        <label>Shipping Address</label>
                            <textarea class="form-control" name="shipping_address" rows="5"></textarea>
                            @error('shipping_address')
                            <div class="alert alert-danger text-center text-white p-1">
                              {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div>

                        <a href="/" class="btn btn-outline-primary btn-lg"><i class="fa fa-shopping-cart"></i> Continue Shopping </a>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="font-weight-medium mb-3">Products</h5>
                        <?php 
                            $subtotal=0;
                            $total=0;
                            $product_item="";
                            $purchased_items="";

                        ?>

                        @if(count($carts) > 0)
                        @foreach($carts as $id=>$cart)
                        <div class="d-flex justify-content-between">
                            <p>{{$cart['name']}}</p>
                            <p>{{$cart['price']}}</p>
                        </div>
                        <?php $subtotal=$cart['price'] * $cart['qty']; ?>
                        <?php $total=$total+$subtotal; ?>
                        <?php
                        $product_item=$cart['name']." (".$cart['price']." * ".$cart['qty'].") =".$subtotal."\n";
                        $purchased_items.=$product_item;
                        ?>
                        @endforeach
                        @endif
                       
                        <hr class="mt-0">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium">{{$subtotal}}</h6>
                        </div>
                       
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">{{$total}}</h5>
                        </div>
                    </div>
                </div>
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Payment</h4>
                    </div>
                    <div class="card-body">   <div class="form-group">
                    <img src="{{asset('images/wavelogo.png')}}" alt="" width=60px height=50px>
                    <img src="{{asset('images/kpay.png')}}" alt=""  width=60px height=50px>
                    <img src="{{asset('images/aya.png')}}" alt="" width=60px height=50px>
                    <img src="{{asset('images/cbpay.png')}}" alt="" width=60px height=50px>

                       &nbsp;                    
                   </div>

                    <div class="form-group">
                            
                                <input type="radio" name="payment" value="prepaid">
                                <label>Wave/KPay/AyaPay,CBpay</label><br>
                                <input type="file" name="payment_receipt" class="form-control">
                           
                        </div>
                     
                        <div class="form-group">
                            <div class="form-control ">
                                <input type="radio" name="payment" value="1">
                                <label class="form-control-label" name="cash_on_deli" >Cash On delivery</label>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="purchased_items" value="{{$purchased_items}}">
                    <input type="hidden" name="grand_total" value="{{$total}}">
                  
                    <div class="card-footer border-secondary bg-transparent">
                     <button type="submit" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Place Order</button>
                    </div>
                    <div>
            </div>
        </div>   
      </form>
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