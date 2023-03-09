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
                    <a class="breadcrumb-item text-dark" href="{{route('home.index')}}">Home</a>
                    <a class="breadcrumb-item text-dark" href="{{route('index')}}">Shop</a>
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
                                                    <input type="checkbox" class="custom-control-input" id="price-1">
                                                    <label class="custom-control-label" for="price-1">$0 -
                                                        $100</label>
                                                    <span class="badge border font-weight-normal">150</span>
                                                </div>
                                                <div
                                                    class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="price-2">
                                                    <label class="custom-control-label" for="price-2">$100 -
                                                        $200</label>
                                                    <span class="badge border font-weight-normal">295</span>
                                                </div>
                                                <div
                                                    class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="price-3">
                                                    <label class="custom-control-label" for="price-3">$200 -
                                                        $300</label>
                                                    <span class="badge border font-weight-normal">246</span>
                                                </div>
                                                <div
                                                    class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                                                    <input type="checkbox" class="custom-control-input" id="price-4">
                                                    <label class="custom-control-label" for="price-4">$300 -
                                                        $400</label>
                                                    <span class="badge border font-weight-normal">145</span>
                                                </div>
                                                <div
                                                    class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                                    <input type="checkbox" class="custom-control-input" id="price-5">
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

                    @if (session('message'))
                        <h4 class="text-danger center">{{ session('message') }}</h4>
                    @endif


                    @foreach ($products as $item)
                        <div class="col-lg-3 col-md-6 col-sm-6 pb-1">
                            <div class="product-item bg-light mb-4">
                                <div class="product-img position-relative overflow-hidden">
                                    {{-- Class ="img-fluid w-100" --}}
                                    <img class="w-100" src="{{ asset('/uploads/products/' . $item->img) }}" width="400"
                                        height="250" alt="">
                                    <div class="product-action">
                                        <a class="btn btn-outline-dark btn-square"
                                            href=" {{ route('add.shopping.cart', ['id' => $item->id]) }} "><i
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
                                <li class="page-item disabled"><a class="page-link" href="#">Previous</span></a>
                                </li>
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
@endsection
