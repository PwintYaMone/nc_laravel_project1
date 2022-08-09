<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Zezmon</title>

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
  <link href="{{asset('front_template/css/responsive.css')}}" rel="stylesheet" />
</head>

<body class="sub_page">
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
                        Hotline Number : 01234567890</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="service.html">
                        admin@gmail.com
                      </a>
                    </li>
                  </div>
                  <div class=" d-none d-lg-flex">
                    <li class="nav-item">
                    <a  class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-user"></i> {{ Auth::user()->name }}
                    </a>
                  </li>
                  <li class="nav-item">
                                       
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-in"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                  </li>
                
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
  </div>

  <!-- products section -->
  <section class="products_section">
    <div class="heading_container">
      <h2>
        New Products In Store
      </h2>
      <p>
        Featured Product Just Arrived
      </p>
    </div>
    <div class="container layout_padding">
      <div class="product_container">
        <a href="">
          <div class="product_box">
            <div class="product_img-box">
              <img src="{{asset('front_template/images/p1.png')}}" alt="" />
              <span>
                Sale
              </span>
            </div>
            <div class="product_detail-box">
              <span>
                $120.00
              </span>
              <p>
                Passage of Lorem Ipsum, you
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="product_box">
            <div class="product_img-box">
              <img src="{{asset('front_template/images/p2.png')}}" alt="" />
              <span>
                Sale
              </span>
            </div>
            <div class="product_detail-box">
              <span>
                $110.00
              </span>
              <p>
                Passage of Lorem Ipsum, you
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="product_box">
            <div class="product_img-box">
              <img src="{{asset('front_template/images/p3.png')}}" alt="" />
              <span>
                Sale
              </span>
            </div>
            <div class="product_detail-box">
              <span>
                $150.00
              </span>
              <p>
                Passage of Lorem Ipsum, you
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="product_box">
            <div class="product_img-box">
              <img src="{{asset('front_template/images/p4.png')}}" alt="" />
              <span>
                Sale
              </span>
            </div>
            <div class="product_detail-box">
              <span>
                $150.00
              </span>
              <p>
                Passage of Lorem Ipsum, you
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="product_box">
            <div class="product_img-box">
              <img src="{{asset('front_template/images/p5.png')}}" alt="" />
              <span>
                Sale
              </span>
            </div>
            <div class="product_detail-box">
              <span>
                $150.00
              </span>
              <p>
                Passage of Lorem Ipsum, you
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="product_box">
            <div class="product_img-box">
              <img src="{{asset('front_template/images/p6.png')}}" alt="" />
              <span>
                Sale
              </span>
            </div>
            <div class="product_detail-box">
              <span>
                $150.00
              </span>
              <p>
                Passage of Lorem Ipsum, you
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="product_box">
            <div class="product_img-box">
              <img src="{{asset('front_template/images/p7.png')}}" alt="" />
              <span>
                Sale
              </span>
            </div>
            <div class="product_detail-box">
              <span>
                $150.00
              </span>
              <p>
                Passage of Lorem Ipsum, you
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="product_box">
            <div class="product_img-box">
              <img src="{{asset('front_template/images/p8.png')}}" alt="" />
              <span>
                Sale
              </span>
            </div>
            <div class="product_detail-box">
              <span>
                $150.00
              </span>
              <p>
                Passage of Lorem Ipsum, you
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="product_box">
            <div class="product_img-box">
              <img src="{{asset('front_template/images/p9.png')}}" alt="" />
              <span>
                Sale
              </span>
            </div>
            <div class="product_detail-box">
              <span>
                $150.00
              </span>
              <p>
                Passage of Lorem Ipsum, you
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="product_box">
            <div class="product_img-box">
              <img src="{{asset('front_template/images/p10.png')}}" alt="" />
              <span>
                Sale
              </span>
            </div>
            <div class="product_detail-box">
              <span>
                $150.00
              </span>
              <p>
                Passage of Lorem Ipsum, you
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="product_box">
            <div class="product_img-box">
              <img src="{{asset('front_template/images/p11.png')}}" alt="" />
              <span>
                Sale
              </span>
            </div>
            <div class="product_detail-box">
              <span>
                $150.00
              </span>
              <p>
                Passage of Lorem Ipsum, you
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="product_box">
            <div class="product_img-box">
              <img src="{{asset('front_template/images/p12.png')}}" alt="" />
              <span>
                Sale
              </span>
            </div>
            <div class="product_detail-box">
              <span>
                $150.00
              </span>
              <p>
                Passage of Lorem Ipsum, you
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- end products section -->

  <!-- find section -->
  <section class="find_section layout_padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-8 offset-md-2">
          <div class="find_container">
            <div class="row">
              <div class="col-sm-6">
                <div class="find_container-img">
                  <img src="{{asset('front_template/images/find-img.png')}}" alt="" />
                </div>
              </div>
              <div class="col-sm-6">
                <h3>
                  Find Everything <br />
                  From A to Z
                </h3>
                <p>
                  Shop Back to school
                </p>
              </div>
            </div>
          </div>
          <div class="shop_container">
            <div class="row">
              <div class="col-sm-6">
                <p>
                  Shoes
                </p>
                <h3>
                  Shop by catagories
                </h3>
                <div>
                  <a href="">
                    View More
                  </a>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="shoe_img-box">
                  <img src="{{asset('front_template/images/shoes.png')}}" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="find_img-box">
            <img src="{{asset('front_template/images/find-hero.png')}}" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end find section -->


  <!-- sign section -->
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
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="{{asset('front_template/js/jquery-3.4.1.min.js')}}"></script>
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