<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AlburaQ - Online Perfume Store</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('/res/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('/res/lib/animate/animate.min.css') }}')}}" rel="stylesheet" />
    <link href="{{ asset('/res/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/res/lib/owlcarousel/assets/owl.carousel.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5toeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link href="{{ asset('res/css/style.css') }}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:wght@500&family=Noto+Serif:ital,wght@0,700;1,700&family=Rasa:wght@300&display=swap"
        rel="stylesheet" />

    <title>Al-Buraq - Perfume</title>
</head>

<body>
    <!-- topbar Start -->
    <div class="container-fluid">
        <div class="row mobileno py-1 px-xl-5" style=" background-color: #debe75; ">
            <h5 class="font-weight-semi-bold" style=" margin-left: 86px; margin-top: 5px; ">
                <i class="fa fa-phone"></i>&nbsp;&nbsp;+91 9726468826
            </h5>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="{{ route('index') }}" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">
                        Al
                    </span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">
                        BuraQ
                    </span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products" />
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0" style=" font-size: 1rem; font-weight: bold; ">
                    Customer Service
                </p>
                <h5 class="m-0">+91 9726468826</h5>
            </div>
        </div>
    </div>

    <!-- <!-- topbar End -->

    <!-- <!-- Navbar Start -->
    <div class="container-fluid navbar1 bg-dark mb3">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse"
                    href="#navbar-vertical" style=" height: 65px; padding:  0 30px; ">
                    <h6 class="text-dark m-0">
                        <i class="fa fa-bars mr-2"></i>Categories
                    </h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
                    id="navbar-vertical" style=" width: calc(100% - 30px); z-index: 999; ">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                Dresses{" "}
                                <i class="fa fa-angle-right float-right mt-1"></i>
                            </a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">
                                    Men's Dresses
                                </a>
                                <a href="" class="dropdown-item">
                                    Women's Dresses
                                </a>
                                <a href="" class="dropdown-item">
                                    Baby's Dresses
                                </a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">
                            Shirts
                        </a>
                        <a href="" class="nav-item nav-link">
                            Jeans
                        </a>
                        <a href="" class="nav-item nav-link">
                            Swimwear
                        </a>
                        <a href="" class="nav-item nav-link">
                            Sleepwear
                        </a>
                        <a href="" class="nav-item nav-link">
                            Sportswear
                        </a>
                        <a href="" class="nav-item nav-link">
                            Jumpsuits
                        </a>
                        <a href="" class="nav-item nav-link">
                            Blazers
                        </a>
                        <a href="" class="nav-item nav-link">
                            Jackets
                        </a>
                        <a href="" class="nav-item nav-link">
                            Shoes
                        </a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9 col-sm-12 d-flex align-items-center" style=" height: 54px; ">
                <nav class="navbar navbar-expand-lg navbar  py-lg-0 px-0">
                    <!-- <!--/.Navbar
               <div class="header"></div>
               <i class="fas fa-plus" data-toggle="modal" data-target="#myModal"></i> -->
                    <div class="wrapper1">
                        <input type="checkbox" id="btn" hidden>

                        <label for="btn" class="menu-btn">
                            <i class="fas fa-bars"></i>
                            <i class="fas fa-times"></i>
                        </label>
                        <nav id="sidebar">
                            <div class="title">Side Menu</div>
                            <ul class="list-items">
                                <li>
                                    <a href="index.php">
                                        <i class="fa fa-angle-right"></i>Home
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-right"></i>Luxury Colection
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-right"></i>Women
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-right"></i> Men
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-angle-right"></i> UniSex
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('index')}}">
                                        <i class="fa fa-angle-right"></i>All Product
                                    </a>
                                </li>

                                <li>
                                    <a href="contact.php">
                                        <i class="fa fa-angle-right"></i>Contact us
                                    </a>
                                </li>
                                <div class="icons">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-github"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </div>
                            </ul>
                        </nav>
                    </div>


                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-2">
                            <a href="{{route('home.index')}}" class="nav-item nav-link active">
                                Home
                            </a>
                            <a href="{{ route('index') }}" class="nav-item nav-link">
                                Product
                            </a>
                            <!-- <a href="detail.php" class="nav-item nav-link">
                    Shop Detail
                  </a> -->
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                    Pages
                                    <!-- <i class="fa fa-angle-down mt-1"></i> -->
                                </a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="{{route('view.shopping.cart')}}" class="dropdown-item">
                                        Shopping Cart
                                    </a>
                                    <a href="{{route('view.checkout')}}" class="dropdown-item">
                                        Checkout
                                    </a>
                                </div>
                            </div>
                            <a href="{{route('view.contact')}}" class="nav-item nav-link">
                                Contact
                            </a>
                        </div>
                    </div>
                    <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                        <a href="" class="btn px-0"
                            style="
                    padding-bottom: 2px;
                    margin-left: 5px;
                    border: hidden;
                  ">
                            <i class="fas fa-heart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle"
                                style="
                      padding-bottom: 2px;
                      margin-left: 5px;
                      border: hidden;
                    ">
                                0
                            </span>
                        </a>
                        <a href="" class="btn px-0 ml-3"
                            style="
                    padding-bottom: 2px;
                    margin-left: 5px;
                    border: hidden;
                  ">
                            <i class="fas fa-shopping-cart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle"
                                style="
                      padding-bottom: 2px;
                      margin-left: 5px;
                      border: hidden;
                    ">
                                0
                            </span>
                        </a>
                    </div>
                    <!-- </div> -->
                </nav>
                <div class="searchbar" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false"
                    aria-controls="collapseExample"
                    style="
                font-size: 25px;
                color: #4a4a4a;
                margin-left: auto;
                margin-right: auto;
              ">
                    <i class="fa fa-search" data-toggle="modal" data-target="#myModal"></i>
                </div>

                <a href="/" class="mobile text-center text-decoration-none d-block d-lg-none"
                    style=" margin-left:auto; margin-right: auto; ">
                    <span class="h1 al text-uppercase px-1"
                        style="
                  color: #debe75;
                  font-family: rasa ;
                  font-size: 35px;
                ">
                        Al
                    </span>
                    <span class="h1 burq text-uppercase px-1 ml-n1"
                        style="
                  color: #debe75;
                  font-family: rasa;
                  font-size: 35px;
                ">
                        BuraQ
                    </span>
                </a>
                <a href="userlogin.php"
                    style="
                margin-left: auto;
                margin-left: auto;
                margin-right: auto;
              ">
                    <div class="userlogin"
                        style="
                  margin-left: auto;
                  font-size: 23px;
                  color: #4a4a4a;
                ">
                        <i class="fa fa-user"></i>
                    </div>
                </a>
                <div class="shopingcart"
                    style="
                font-size: 23px;
                color: #4a4a4a;
                margin-left: auto;
                margin-right: auto;
              ">
                    <a href="cart.php">
                        <i class="fas fa-shopping-cart"
                            style="
                    color: #4a4a4a;
                  "></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- <!-- Navbar End -->
    <!-- <!-- Modal -->
    <!-- <div
        class="modal fade"
        id="myModal"
        tabindex="3"
        role="dialog"
        aria-labelledby="myModalLabel"
      >
        <div class="modal-dialog " role="document">
          
            <div class="modal-header">
              <input
                type="search"
                class="form-control rounded"
                placeholder="Search"
                aria-label="Search"
                aria-describedby="search-addon"
              />
              <span class="input-group-text border-0" id="search-addon">
                <i class="fas fa-search"></i>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </span>
            
          </div>
        </div>
      </div> -->
