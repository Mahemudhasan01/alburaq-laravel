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
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-2">
                    <a href="post.php"><img class="logo" src="{{ url('frontend/images/news.jpg') }}"></a>
                </div>
                <!-- /LOGO -->
                <!-- LOGO-Out -->
                <div class="col-md-offset-9  col-md-1">
                    <a href="{{route('admin.logout')}}" class="admin-logout">logout</a>
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
