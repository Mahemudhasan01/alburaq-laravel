<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AlburaQ - Online Perfume Store</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('res/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/fontawesome-free@6.2.1/css/fontawesome.min.css" rel="stylesheet" /> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('/res/lib/animateate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/res/lib/owlcarousel/assets/owl.carousel.min"') }}" rel="stylesheet" />
    <link href="{{ asset('/res/lib/owlcarousel/assets/owl.carousel"') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5toeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link href="{{ asset('/res/css/style.css') }}" rel="stylesheet" />
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
                <a href="" class="text-decoration-none">
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
                                    <a href="shop.php">
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
                            <a href="{{route('index')}}" class="nav-item nav-link">
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
                            <a href="contact.php" class="nav-item nav-link">
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
                        <a href="{{route('view.shopping.cart')}}" class="btn px-0 ml-3"
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
                                5
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
                    <a href="{{route('view.shopping.cart')}}">
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
    <div class="collapse" id="collapseExample">
        <div class="input-group rounded">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
                <i class="fas fa-search"></i>
            </span>
        </div>
        <!-- <div class="card card-body">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  </div> -->
    </div>


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Shop</a>
                    <span class="breadcrumb-item active">Shop List</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Shop Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <!-- <div class="col-lg-3 col-md-4">
               
            </div> -->
            <!-- Shop Sidebar End -->

            <!-- Shop Product Start -->
            <div class="col-lg-12 col-md-8">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div>
                                <button class="btn btn-sm btn-light"><i class="fa fa-th-large"></i></button>
                                <button class="btn btn-sm btn-light ml-2"><i class="fa fa-bars"></i></button>
                            </div>
                            <div class="ml-2">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-light dropdown-toggle"
                                        data-toggle="dropdown">Sorting</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- Price Start -->
                                        <h5 class="section-title position-relative text-uppercase mb-3"><span
                                                class="bg-secondary pr-3">Filter by price</span></h5>
                                        <div class="bg-light p-4 mb-30">
                                            <form>
                                                <div
                                                    class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                                    <input type="checkbox" class="custom-control-input" checked
                                                        id="price-all">
                                                    <label class="custom-control-label" for="price-all">All
                                                        Price</label>
                                                    <span class="badge border font-weight-normal">1000</span>
                                                </div>
                                                <div
                                                    class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="price-1">
                                                    <label class="custom-control-label" for="price-1">$0 -
                                                        $100</label>
                                                    <span class="badge border font-weight-normal">150</span>
                                                </div>
                                                <div
                                                    class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="price-2">
                                                    <label class="custom-control-label" for="price-2">$100 -
                                                        $200</label>
                                                    <span class="badge border font-weight-normal">295</span>
                                                </div>
                                                <div
                                                    class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="price-3">
                                                    <label class="custom-control-label" for="price-3">$200 -
                                                        $300</label>
                                                    <span class="badge border font-weight-normal">246</span>
                                                </div>
                                                <div
                                                    class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="price-4">
                                                    <label class="custom-control-label" for="price-4">$300 -
                                                        $400</label>
                                                    <span class="badge border font-weight-normal">145</span>
                                                </div>
                                                <div
                                                    class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="price-5">
                                                    <label class="custom-control-label" for="price-5">$400 -
                                                        $500</label>
                                                    <span class="badge border font-weight-normal">168</span>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- Price End -->
                                    </div>
                                </div>
                                <div class="btn-group ml-2">
                                    <button type="button" class="btn btn-sm btn-light dropdown-toggle"
                                        data-toggle="dropdown">Showing</button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">10</a>
                                        <a class="dropdown-item" href="#">20</a>
                                        <a class="dropdown-item" href="#">30</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if(session('message'))
                        <h4 class="text-danger center">{{session('message')}}</h4>
                    @endif  


                    @foreach ($products as $item)
                        <div class="col-lg-3 col-md-6 col-sm-6 pb-1">
                            <div class="product-item bg-light mb-4">
                                <div class="product-img position-relative overflow-hidden">
                                    {{-- Class ="img-fluid w-100" --}}
                                    <img class="w-100" src="{{ asset('/uploads/products/' . $item->img) }}" width="400" height="250"
                                        alt="">
                                    <div class="product-action">
                                        <a class="btn btn-outline-dark btn-square" href=" {{route('add.shopping.cart', ["id" => $item->id])}} "><i
                                                class="fa fa-shopping-cart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i
                                                class="far fa-heart"></i></a>`
                                        <a class="btn btn-outline-dark btn-square" href=""><i
                                                class="fa fa-sync-alt"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i
                                                class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="text-center py-4">
                                    <a class="h6 text-decoration-none text-truncate"
                                        href="">{{ $item->name }}</a>
                                    <div class="d-flex align-items-center justify-content-center mt-2">
                                        <h5>{{ $item->price }}</h5>
                                        <h6 class="text-muted ml-2"><del>{{ $item->orignal_price }}</del></h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mb-1">
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small class="fa fa-star text-primary mr-1"></small>
                                        <small>(99)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    <div class="col-12">
                        <nav>
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled"><a class="page-link"
                                        href="#">Previous</span></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">
                    AL-BURAQ | PERFUMES
                </h5>
                <p class="mb-4">
                    We are selling attar and perfumes! We have our own product and
                    best quality.
                </p>

            </div>

            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="wrapper">
                        <!-- Accordion Heading One -->
                        <div class="parent-tab">
                            <input type="radio" name="tab" id="tab-1" checked />
                            <label for="tab-1">
                                <span data-toggle="collapse" data-target="#demo1">Connect with us</span>
                                <div class="icon">
                                    <i class="fa fa-angle-down" data-toggle="collapse" data-target="#demo1"></i>
                                </div>
                            </label>
                            <div id="demo1" class="collapse content">
                                <p class="mb-2">
                                    <i class="fa fa-map-marker-alt text-primary mr-3"></i>
                                    Palanpur higway chhapi, Gujarat-385210 (India).
                                </p>
                                <p class="mb-2">
                                    <i class="fa fa-envelope text-primary mr-3"></i>
                                    alburaq.attrprfm@gmail.com
                                </p>
                                <p class="mb-0">
                                    <i class="fa fa-phone-alt text-primary mr-3"></i>+91
                                    9726468826
                                </p>
                            </div>
                        </div>
                        <!-- Accordion Heading Two -->
                        <div class="parent-tab">
                            <input type="radio" name="tab" id="tab-2" />
                            <label for="tab-2">
                                <span data-toggle="collapse" data-target="#demo2">Follow Us</span>
                                <div class="icon">
                                    <i class="fa fa-angle-down" data-toggle="collapse" data-target="#demo2"></i>
                                </div>
                            </label>
                            <div id="demo2" class="collapse content">
                                <p>
                                <div class="d-flex">
                                    <a class="btn btn-primary btn-square mr-2" href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-primary btn-square mr-2" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="btn btn-primary btn-square mr-2" href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a class="btn btn-primary btn-square" href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </div>
                                </p>
                            </div>
                        </div>
                        <div class="parent-tab">
                            <input type="radio" name="tab" id="tab-3" />
                            <label for="tab-3">
                                <span data-toggle="collapse" data-target="#demo3">Our Service</span>
                                <div class="icon">
                                    <i class="fa fa-angle-down" data-toggle="collapse" data-target="#demo3"></i>
                                </div>
                            </label>
                            <div id="demo3" class="collapse content">
                                <p class="mb-2">Quality Product</p>
                                <p class="mb-2">Free Shipping</p>
                                <p class="mb-2">24/7 Support</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, 0.1) !important" ;>
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy;
                    <a class="text-primary" href="#">
                        AL-BuraQ.com
                    </a>
                    . All Rights Reserved.
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="{{ asset('/res/img/payments.png') }}" alt="" />
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="./owlcarousel/owl.carousel.min.js"></script>
    <script src="./owlcarousel/owl.carousel.js"></script>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
