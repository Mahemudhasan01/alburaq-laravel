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

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{ route('home.index') }}">Home</a>
                    <span class="breadcrumb-item active">Attar</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
    {{-- <-- Products Start --> --}}
    <div class="container-fluid pt-0 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span
                class="bg-secondary pr-3">@php
                if (!empty($category_name)) {
                    # code...
                    print($category_name);
                }else {
                    # code...
                    $cat_name = DB::table('categorys')->where('id', '=', $cat_id)->first('category_name');
                    print($cat_name->category_name);
                }
                @endphp
            </span></h2>
        <div class="row px-xl-5">
            @foreach ($categorys as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">

                            <img class="img-fluid w-100" src="{{ asset('uploads/products/' . $item->img) }}"
                                alt="" />
                            <div class="product-action">
                                <a class="btn btn-outline-dark btn-square" href=""><i
                                        class="fa fa-shopping-cart"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>$123.00</h5>
                                <h6 class="text-muted ml-2"><del>$123.00</del></h6>
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
                                                                          </div>
@endsection
