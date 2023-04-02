<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ADMIN Panel</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css') }}" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ url('frontend/css/font-awesome.css') }}" />
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}" />
    <!-- Boostrap stlylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5toeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

</head>

<body>
    <!-- HEADER -->
    <div id="header-admin">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex ml-0">
                <!-- LOGO -->
                    <div class="col-lg-3">
                        <a href="{{ route('home.index') }}" class="text-decoration-none">
                            <span class="h1 text-uppercase text-primary bg-dark px-2">
                                Al
                            </span>
                            <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">
                                BuraQ
                            </span>
                        </a>
                    </div>
                <!-- /LOGO -->
                <!-- LOGO-Out -->
                <div class="col-md-offset-9  col-md-1">
                    <span><a href="{{route('admin.logout')}}" class="admin-logout">logout</a></span>
                </div>
                <!-- /LOGO-Out -->
            </div>
        </div>
    </div>
    <!-- /HEADER -->
    <!-- Menu Bar -->
    <div id="admin-menubar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="admin-menu">
                        <li>
                            <a href="{{route('product.view')}}">Producs</a>
                        </li>
                        <li>
                            <a href="{{route('view.orders')}}">Orders</a>
                        </li>
                        <li>
                            <a href="{{route('view.category')}}">Categorys</a>
                        </li>
                        <li>
                            <a href="{{route('view.users')}}">Users</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /Menu Bar -->

</body>
