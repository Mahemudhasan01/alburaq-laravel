@extends('frontend-layouts.main')

@section('main-frontend-container')
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


    <div class="container-fluid mb-1">
        <div class="row ">
            <!-- <div class="col-lg-12" >  -->

            <div id="header-carousel" class="carousel slide carousel-fade  mb-lg-0" data-ride="carousel" height="244px">
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
                        <img class="position-absolute w-100 h-100" src="{{ asset('res/img/banner3.jpeg') }}"
                            alt="description">

                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style=" max-width: 700px; margin-top: -200px; ">
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
                    <div class="carousel-item position-relative" style=" height: 244px; ">
                        <img class="position-absolute w-100 h-100" src="./img/" alt="description" />
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style=" max-width: 700px; margin-top: -200px; ">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">
                                    Women"s Perfumes
                                </h1>
                                <!-- <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>  -->
                                <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                    href="#">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style=" height: 244px; ">
                        <img class="position-absolute w-100 h-100" src="{{ asset('res/img/carousel-3.jpg') }}"
                            alt="description" />
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style=" max-width: 700px; margin-top:-200px; ">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">
                                    Kids Fashion
                                </h1>
                                <!-- <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>  -->
                                <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                                    href="#">
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
            <span class="bg-secondary trending pr-3"
                style="
              color: #debe75;
              font-family: rasa;
            ">
                Trending
            </span>
            <br>
            <span class="collect" style="
              color:#debe75;
              font-family: rasa;
            ">
                Collection
            </span>
        </h2>
        <div class="row">
            <div class="col-lg-3 col-6" style=" padding-left: 5px; padding-right: 5px; height: 200px; ">
                <div class="product-offer1 mb-20" style="
                height: 200px;
              ">
                    <img class="img-fluid" src="{{ asset('res/img/trending1.jpeg') }}" alt="" />
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
            <div class="col-lg-3 col-6" style=" padding-left: 5px; padding-right: 5px; height: 200px; ">
                <div class="product-offer1 mb-20" style="
                height: 200px;
              ">
                    <img class="img-fluid" src="{{ asset('res/img/trending2.jpeg') }}" alt="" />
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
            <div class="col-lg-3 col-6 mobile-trending" style=" padding-left: 5px; padding-right: 5px; height: 200px; ">
                <div class="product-offer1 mb-20" style="
                height: 200px;
              ">
                    <img class="img-fluid" src="{{ asset('res/img/oud-mikhlaat.jfif') }}" alt="" />
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
            <div class="col-lg-3 col-6 mobile-trending" style=" padding-left: 5px; padding-right: 5px; height: 200px; ">
                <div class="product-offer1 mb-30" style="
                height: 200px;
              ">
                    <img class="img-fluid" src="{{ asset('res/img/al-barid.jfif') }}" alt="" />
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
            <span class="bg-secondary fragrance pr-3"
                style="
              color: #debe75;
              font-family: rasa;
            ">
                Fragrance
            </span>
            <br>
            <span class="bg-secondary categories pr-3"
                style="
              color: #debe75;
              font-family: rasa;
            ">
                Categories
            </span>
        </h2>
        <div class="row px-xl-5 pb-1">
            @foreach ($category as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <a class="text-decoration-none" href="{{ route('show.category', ['cat' => $item->id]) }}">
                        <div class="cat-item d-flex align-items-center mb-4">
                            <div class="overflow-hidden" style=" width: 100px; height: 100px; ">
                                <img class="img-fluid" src="img/" alt="" />
                            </div>
                            <div class="flex-fill pl-3">
                                <h6>{{ $item->category_name }}</h6>
                                <small class="text-body">9 Products</small>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <!--  Categories End -->


    <div class="container-fluid mobilesize">
        <h2 class=" position-relative text-uppercase mb-1">
            <span class="bg-secondary trending pr-3"
                style="
              color: #debe75;
              font-family: rasa;
            ">
                Special
            </span>
            <br>
            <span class="collect" style="
              color: #debe75;
              font-family: rasa;
            ">
                Offer
            </span>
        </h2>
        <div class="row">
            <div class="col-lg-3 col-6 " style=" padding-left: 5px; padding-right: 5px; ">
                <div class="product-offer1 mb-30" style=" height: 200px; ">
                    <img class="img-fluid" src="{{ asset('res/img/oud-mikhlaat.jfif') }}" alt="" />
                    <!-- <div class="offer-text">
                                                    <h6 class="text-white text-uppercase">Save 20%</h6>
                                                            <h3 class="text-white mb-3">Special Offer</h3>
                                                    <a href="" class="btn btn-primary">
                                                      Shop Now
                                                    </a>
                                                  </div>  -->
                </div>
            </div>
            <div class="col-lg-3 col-6" style=" padding-left: 5px; padding-right: 5px; ">
                <div class="product-offer1 mb-30" style=" height: 200px; ">
                    <img class="img-fluid" src="{{ asset('res/img/oud-mikhlaat.jfif') }}" alt="" />
                    <!-- <div class="offer-text">
                                                    <h6 class="text-white text-uppercase">Save 20%</h6>
                                                            <h3 class="text-white mb-3">Special Offer</h3>
                                                    <a href="" class="btn btn-primary">
                                                      Shop Now
                                                    </a>
                                                  </div>  -->
                </div>
            </div>
            <div class="col-lg-3 col-6 mobile-trending" style=" padding-left: 5px; padding-right: 5px; ">
                <div class="product-offer1 mb-30" style=" height: 200px; ">
                    <img class="img-fluid" src="{{ asset('res/img/oud-mikhlaat.jfif') }}" alt="" />
                </div>
            </div>
            <div class="col-lg-3 col-6 mobile-trending" style=" padding-left: 5px; padding-right: 5px; ">
                <div class="product-offer1 mb-30" style=" height: 200px; ">
                    <img class="img-fluid" src="{{ asset('res/img/al-barid.jfif') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
@endsection
