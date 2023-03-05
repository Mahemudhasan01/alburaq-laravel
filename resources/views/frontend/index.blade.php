<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AlburaQ - Online Perfume Store</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('res/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Libraries Stylesheet -->
    <link href="{{asset('/res/lib/animate/animate.min.css')}}" rel="stylesheet" />
    <link
      href="{{asset('/res/lib/owlcarousel/assets/owl.carousel.min')}}"
      rel="stylesheet"
    />
    <link
      href="{{asset('/res/lib/owlcarousel/assets/owl.carousel')}}"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5toeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link href="{{asset('/res/css/style.css')}}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora:wght@500&family=Noto+Serif:ital,wght@0,700;1,700&family=Rasa:wght@300&display=swap"
      rel="stylesheet"
    />

    <title>Al-Buraq - Perfume</title> 
</head>

<body>
     <!-- topbar Start --> 
     <div class="container-fluid">
        <div
          class="row mobileno py-1 px-xl-5"
          style=" background-color: #debe75; "
        >
          <h5
            class="font-weight-semi-bold"
            style=" margin-left: auto!important; margin-top: 5px; margin-right:auto; "
          >
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
                <input
                  type="text"
                  class="form-control"
                  placeholder="Search for products"
                />
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
            <a
              class="btn d-flex align-items-center justify-content-between bg-primary w-100"
              data-toggle="collapse"
              href="#navbar-vertical"
              style=" height: 65px; padding:  0 30px; "
            >
              <h6 class="text-dark m-0">
                <i class="fa fa-bars mr-2"></i>Categories
              </h6>
              <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav
              class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
              id="navbar-vertical"
              style=" width: calc(100% - 30px); z-index: 999; "
            >
              <div class="navbar-nav w-100">
                <div class="nav-item dropdown dropright">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                  >
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
          <div
            class="col-lg-9 col-sm-12 d-flex align-items-center"
            style=" height: 54px; "
          >
            <nav class="navbar navbar-expand-lg navbar  py-lg-0 px-0">
              <!-- /.Navbar  -->
               <!-- <div class="header"></div>  -->
               <!-- <i class="fas fa-plus" data-toggle="modal" data-target="#myModal"></i>  -->
               <div class="wrapper1">
                <input type="checkbox" id="btn" hidden >
               
                <label for="btn" class="menu-btn">
                  <i class="fas fa-bars"></i>
                  <i class="fas fa-times"></i>
                </label>
                <nav id="sidebar" >
                  <div class="title">Side Menu</div>
                  <ul class="list-items">
                    <li>
                      <a href="{{route('home.index')}}" >
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
       

              
              <div
                class="collapse navbar-collapse justify-content-between"
                id="navbarCollapse"
              >
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
                    <a
                      href="#"
                      class="nav-link dropdown-toggle"
                      data-toggle="dropdown"
                    >
                      Pages <!-- <i class="fa fa-angle-down mt-1"></i> -->
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
                <a
                  href=""
                  class="btn px-0"
                  style="
                    padding-bottom: 2px;
                    margin-left: 5px;
                    border: hidden;
                  "
                >
                  <i class="fas fa-heart text-primary"></i>
                  <span
                    class="badge text-secondary border border-secondary rounded-circle"
                    style="
                      padding-bottom: 2px;
                      margin-left: 5px;
                      border: hidden;
                    "
                  >
                    0
                  </span>
                </a>
                <a
                  href=""
                  class="btn px-0 ml-3"
                  style="
                    padding-bottom: 2px;
                    margin-left: 5px;
                    border: hidden;
                  "
                >
                  <i class="fas fa-shopping-cart text-primary"></i>
                  <span
                    class="badge text-secondary border border-secondary rounded-circle"
                    style="
                      padding-bottom: 2px;
                      margin-left: 5px;
                      border: hidden;
                    "
                  >
                    0
                  </span>
                </a>
              </div>
              <!-- </div> -->
            </nav>
            <div
              class="searchbar"
              data-toggle="collapse"
              data-target="#collapseExample"
              aria-expanded="false"
              aria-controls="collapseExample"
              style="
                font-size: 25px;
                color: #4a4a4a;
                margin-left: auto;
                margin-right: auto;
              "
            >
              <i
                class="fa fa-search"
                data-toggle="modal"
                data-target="#myModal"
              ></i>
            </div>

            <a
              href="/"
              class="mobile text-center text-decoration-none d-block d-lg-none"
              style=" margin-left:auto; margin-right: auto; "
            >
              <span
                class="h1 al text-uppercase px-1"
                style="
                  color: #debe75;
                  font-family: rasa ;
                  font-size: 35px;
                "
              >
                Al
              </span>
              <span
                class="h1 burq text-uppercase px-1 ml-n1"
                style="
                  color: #debe75;
                  font-family: rasa;
                  font-size: 35px;
                "
              >
                BuraQ
              </span>
            </a>
            <a
              href="userlogin.php"
              style="
                margin-left: auto;
                margin-left: auto;
                margin-right: auto;
              "
            >
              <div
                class="userlogin"
                style="
                  margin-left: auto;
                  font-size: 23px;
                  color: #4a4a4a;
                "
              >
                <i class="fa fa-user"></i>
              </div>
            </a>
            <div
              class="shopingcart"
              style="
                font-size: 23px;
                color: #4a4a4a;
                margin-left: auto;
                margin-right: auto;
              "
            >
              <a href="cart.php">
                <i
                  class="fas fa-shopping-cart"
                  style="
                    color: #4a4a4a;
                  "
                ></i>
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
          <input
            type="search"
            class="form-control rounded"
            placeholder="Search"
            aria-label="Search"
            aria-describedby="search-addon"
          />
          <span class="input-group-text border-0" id="search-addon">
            <i class="fas fa-search"></i>
          </span>
        </div>
        <!-- <div class="card card-body">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  </div> -->
      </div>


    <div class="container-fluid mb-1">
        <div class="row ">
           <!-- <div class="col-lg-12" >  -->

          <div
            id="header-carousel"
            class="carousel slide carousel-fade  mb-lg-0"
            data-ride="carousel"
            height="244px"
          >
             <!-- <ol class="carousel-indicators">
              <li
                data-target="#header-carousel"
                data-slide-href="0"
                class="active"
              ></li>
              <li data-target="#header-carousel" data-slide-href="1"></li>
              <li data-target="#header-carousel" data-slide-href="2"></li>
            </ol>  -->
            <div class="carousel-inner">
              <div class="carousel-item position-relative active">
                <img
                  class="position-absolute w-100 h-100"
                  src="{{asset('res/img/banner3.jpeg')}}"
                  alt="description"
                >
                
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                  <div
                    class="p-3"
                     style=" max-width: 700px; margin-top: -200px; " 
                  >
                     <!-- <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">
                      Men"s Perfumes
                    </h1>  -->
                     <!-- <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>  -->
                     <!-- <a
                      class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                      href="#"
                    >
                      Shop Now
                    </a>  -->
                  </div>
                </div>
              </div>
              <div
                class="carousel-item position-relative"
                style=" height: 244px; "
              >
                <img
                  class="position-absolute w-100 h-100"
                  src="./img/"
                  alt="description"
                />
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                  <div
                    class="p-3"
                    style=" max-width: 700px; margin-top: -200px; "
                  >
                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">
                      Women"s Perfumes
                    </h1>
                     <!-- <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>  -->
                    <a
                      class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                      href="#"
                    >
                      Shop Now
                    </a>
                  </div>
                </div>
              </div>
              <div
                class="carousel-item position-relative"
                style=" height: 244px; "
              >
                <img
                  class="position-absolute w-100 h-100"
                  src="{{asset('res/img/carousel-3.jpg')}}"
                  alt="description"
                />
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                  <div
                    class="p-3"
                    style=" max-width: 700px; margin-top:-200px; "
                  >
                    <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">
                      Kids Fashion
                    </h1>
                     <!-- <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>  -->
                    <a
                      class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                      href="#"
                    >
                      Shop Now
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
           <!-- </div>  -->
        </div>
      </div>
       <!-- <div class="trend col-lg-12">
        <h2 class=" position-relative text-uppercase mb-1">
          <span
            class="bg-secondary trending pr-3"
            style="
              marginLeft: "32%",
              color: "#debe75",
              fontFamily: "bodoniflf",
            "
          >
            Trending{" "}
          </span>
          <br></br>
          <span
            class="collect"
            style="
              marginLeft: "29%",
              color: "#debe75",
              fontFamily: "bodoniflf",
            "
          >
            Collection
          </span>
        </h2>
        <div class="product-offer mb-30" style=" height: "200px" ">
          <img class="img-fluid" src="img/oud-mikhlaat.jfif" alt="" />
          <div class="offer-text">  -->
       <!-- <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>  -->
       <!-- <a href="" class="btn btn-primary">
              Shop Now
            </a>
          </div>
        </div>
        <div class="product-offer2 mb-30" style=" height: "200px" ">
          <img class="img-fluid" src="img/al-barid.jfif" alt="" />
          <div class="offer-text">
           <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>  -->
       <!--<a href="" class="btn btn-primary">
              Shop Now
            </a>
          </div>
        </div>
      </div>  -->
      <div class="container-fluid mobilesize mt-3">
        <h2 class=" position-relative text-uppercase text-sm-center mb-1">
          <span
            class="bg-secondary trending pr-3"
            style="
              color: #debe75;
              font-family: rasa;
            "
          >
            Trending
          </span>
          <br>
          <span
            class="collect"
            style="
              color:#debe75;
              font-family: rasa;
            "
          >
            Collection
          </span>
        </h2>
        <div class="row">
          <div
            class="col-lg-3 col-6"
            style=" padding-left: 5px; padding-right: 5px; height: 200px; "
          >
            <div
              class="product-offer1 mb-20"
              style="
                height: 200px;
              "
            >
              <img class="img-fluid" src="{{asset('res/img/trending1.jpeg')}}" alt="" />
               <!-- <div class="offer-text">
                -
                 <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3> 
                <div>
                  <a href="" class="btn btn-primary">
                    Shop Now
                  </a>
                </div>
              </div>  -->
            </div>
          </div>
          <div
            class="col-lg-3 col-6"
            style=" padding-left: 5px; padding-right: 5px; height: 200px; "
          >
            <div
              class="product-offer1 mb-20"
              style="
                height: 200px;
              "
            >
              <img class="img-fluid" src="{{asset('res/img/trending2.jpeg')}}" alt="" />
               <!-- <div class="offer-text">
                  <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3> 
                <div>
                  <a href="" class="btn btn-primary">
                    Shop Now
                  </a>
                </div>
              </div>  -->
            </div>
          </div>
          <div
            class="col-lg-3 col-6 mobile-trending"
            style=" padding-left: 5px; padding-right: 5px; height: 200px; "
          >
            <div
              class="product-offer1 mb-20"
              style="
                height: 200px;
              "
            >
              <img class="img-fluid" src="{{asset('res/img/oud-mikhlaat.jfif')}}" alt="" />
              <div class="offer-text">
                 <!-- <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>  -->
                <div>
                  <a href="" class="btn btn-primary">
                    Shop Now
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-lg-3 col-6 mobile-trending"
            style=" padding-left: 5px; padding-right: 5px; height: 200px; "
          >
            <div
              class="product-offer1 mb-30"
              style="
                height: 200px;
              "
            >
              <img class="img-fluid" src="{{asset('res/img/al-barid.jfif')}}" alt="" />
              <div class="offer-text">
                 <!-- <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>  -->
                <a href="" class="btn btn-primary">
                  Shop Now
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
       <!--  Featured Start --> 
       <!-- <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: "30px"">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: "30px"">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: "30px"">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center bg-light mb-4" style="padding: "30px"">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
                </div>
            </div>
        </div>
    </div>  -->
       <!--  Featured End -->  

       <!--  Categories Start -->  
      <div class="container-fluid mt-3">
        <h2 class=" position-relative text-uppercase mx-xl-5 mb-1">
          <span
            class="bg-secondary fragrance pr-3"
            style="
              color: #debe75;
              font-family: rasa;
            "
          >
            Fragrance
          </span>
          <br>
          <span
            class="bg-secondary categories pr-3"
            style="
              color: #debe75;
              font-family: rasa;
            "
          >
            Categories
          </span>
        </h2>
        <div class="row px-xl-5 pb-1">
          <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="">
              <div class="cat-item d-flex align-items-center mb-4">
                <div
                  class="overflow-hidden"
                  style=" width: 100px; height: 100px; "
                >
                  <img class="img-fluid" src="img/" alt="" />
                </div>
                <div class="flex-fill pl-3">
                  <h6>ATTAR</h6>
                  <small class="text-body">9 Products</small>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="">
              <div class="cat-item img-zoom d-flex align-items-center mb-4">
                <div
                  class="overflow-hidden"
                  style=" width: 100px; height: 100px; "
                >
                  <img class="img-fluid" src="{{asset('res/img/')}}" alt="" />
                </div>
                <div class="flex-fill pl-3">
                  <h6>PERFUMES</h6>
                  <small class="text-body">0 Products</small>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="">
              <div class="cat-item img-zoom d-flex align-items-center mb-4">
                <div
                  class="overflow-hidden"
                  style=" width: 100px; height: 100px; "
                >
                  <img class="img-fluid" src="img/" alt="" />
                </div>
                <div class="flex-fill pl-3">
                  <h6>BAKHOOR</h6>
                  <small class="text-body">0 Products</small>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="">
              <div class="cat-item img-zoom d-flex align-items-center mb-4">
                <div
                  class="overflow-hidden"
                  style=" width: 100px; height: 100px; "
                >
                  <img class="img-fluid" src="img/" alt="" />
                </div>
                <div class="flex-fill pl-3">
                  <h6>OUD</h6>
                  <small class="text-body">0 Products</small>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
       <!--  Categories End --> 

       <!--  Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Featured Products</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('res/img/al-barid.jfif')}}" alt=""/>
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
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
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('res/img/black-xs.jfif')}}" alt=""/>
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star-half-alt text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('res/img/deer-musk.jfif')}}" alt=""/>
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star-half-alt text-primary mr-1"></small>
                            <small class="far fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('res/img/khafeef.jfif')}}" alt=""/>
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="far fa-star text-primary mr-1"></small>
                            <small class="far fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('res/img/musk-e-taskeen.jfif')}}" alt=""/>
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
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
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('res/img/oud-al-madinah.jfif')}}" alt=""/>
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star-half-alt text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('res/img/oud-mikhlaat.jfif')}}" alt=""/>
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star-half-alt text-primary mr-1"></small>
                            <small class="far fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('res/img/tathir.jfif')}}" alt=""/>
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>$123.00</h5><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="far fa-star text-primary mr-1"></small>
                            <small class="far fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
       <!--  Products End -->  

       <!--  Offer Start -->  
       <!-- <div class="container-fluid ">
        <h2 class="position-relative text-uppercase mx-xl-5 mb-4">
          <span
            class="bg-secondary special pr-3"
            style="
              marginLeft: "24%",
              color: "#debe75",
              fontFamily: "bodoniflf",
            "
          >
            Special Offer
          </span>
        </h2>
        <div class="row px-xl-5">
          <div class="col-md-6">
            <div class="product-offer mb-30" style=" height: "200px" ">
              <img class="img-fluid" src="img/tathir.jfif" alt="" />
              <div class="offer-text">
                <h6 class="text-white text-uppercase">Save 20%</h6>
                <h3 class="text-white mb-3">Special Offer</h3>
                <a href="" class="btn btn-primary">
                  Shop Now
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="product-offer2 mb-30" style=" height: "200px" ">
              <img class="img-fluid" src="img/deer-musk.jfif" alt="" />
              <div class="offer-text">
                <h6 class="text-white text-uppercase">Save 20%</h6>
                <h3 class="text-white mb-3">Special Offer</h3>
                <a href="" class="btn btn-primary">
                  Shop Now
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>  -->
      <div class="container-fluid mobilesize">
        <h2 class=" position-relative text-uppercase mb-1">
          <span
            class="bg-secondary trending pr-3"
            style="
              color: #debe75;
              font-family: rasa;
            "
          >
            Special
          </span>
          <br>
          <span
            class="collect"
            style="
              color: #debe75;
              font-family: rasa;
            "
          >
            Offer
          </span>
        </h2>
        <div class="row">
          <div
            class="col-lg-3 col-6 "
            style=" padding-left: 5px; padding-right: 5px; "
          >
            <div class="product-offer1 mb-30" style=" height: 200px; ">
              <img class="img-fluid" src="{{asset('res/img/oud-mikhlaat.jfif')}}" alt="" />
               <!-- <div class="offer-text">
                <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                <a href="" class="btn btn-primary">
                  Shop Now
                </a>
              </div>  -->
            </div>
          </div>
          <div
            class="col-lg-3 col-6"
            style=" padding-left: 5px; padding-right: 5px; "
          >
            <div class="product-offer1 mb-30" style=" height: 200px; ">
              <img class="img-fluid" src="{{asset('res/img/oud-mikhlaat.jfif')}}" alt="" />
               <!-- <div class="offer-text">
                <h6 class="text-white text-uppercase">Save 20%</h6>
                        <h3 class="text-white mb-3">Special Offer</h3>
                <a href="" class="btn btn-primary">
                  Shop Now
                </a>
              </div>  -->
            </div>
          </div>
          <div
            class="col-lg-3 col-6 mobile-trending"
            style=" padding-left: 5px; padding-right: 5px; "
          >
            <div class="product-offer1 mb-30" style=" height: 200px; ">
              <img class="img-fluid" src="{{asset('res/img/oud-mikhlaat.jfif')}}" alt="" />
            </div>
          </div>
          <div
            class="col-lg-3 col-6 mobile-trending"
            style=" padding-left: 5px; padding-right: 5px; "
          >
            <div class="product-offer1 mb-30" style=" height: 200px; ">
              <img class="img-fluid" src="{{asset('res/img/al-barid.jfif')}}" alt="" />
            </div>
          </div>
        </div>
      </div>
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
                    <span data-toggle="collapse"
                        data-target="#demo1">Connect with us</span>
                    <div class="icon">
                      <i
                        class="fa fa-angle-down"
                        data-toggle="collapse"
                        data-target="#demo1"
                      ></i>
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
                    <span data-toggle="collapse"
                        data-target="#demo2">Follow Us</span>
                    <div class="icon">
                      <i
                        class="fa fa-angle-down"
                        data-toggle="collapse"
                        data-target="#demo2"
                      ></i>
                    </div>
                  </label>
                  <div id="demo2" class="collapse content">
                    <p>
                      <div class="d-flex">
                        <a
                          class="btn btn-primary btn-square mr-2"
                          href="#"
                        >
                          <i class="fab fa-twitter"></i>
                        </a>
                        <a
                          class="btn btn-primary btn-square mr-2"
                          href="#"
                        >
                          <i class="fab fa-facebook-f"></i>
                        </a>
                        <a
                          class="btn btn-primary btn-square mr-2"
                          href="#"
                        >
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
                    <span data-toggle="collapse"
                        data-target="#demo3">Our Service</span>
                    <div class="icon">
                      <i
                        class="fa fa-angle-down"
                        data-toggle="collapse"
                        data-target="#demo3"
                      ></i>
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
        <div
          class="row border-top mx-xl-5 py-4"
          style= "border-color: rgba(256, 256, 256, 0.1) !important";
        >
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
            <img class="img-fluid" src="{{asset('res/img/payments.png')}}" alt="" />
          </div>
        </div>
      </div>
       <!-- Footer End --> 

    <!-- Back to top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script> -->
  <script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"
  ></script>
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