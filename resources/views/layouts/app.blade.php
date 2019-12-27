<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AWP_rahaf_103359</title>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .bg-danger, .bg-success {
            padding: 16px 0;
            border-radius: 5px;
            text-align: center;
            margin: 0 auto;
            margin-bottom: 10px;
        }
        .card {
            text-align: right;
            direction: rtl;
        }
        .rating {
            overflow: hidden;
            display: inline-block;
            position: relative;
            font-size:20px;
            color: #FFCA00;
        }
        .rating-star {
            padding: 0 5px;
            margin: 0;
            cursor: pointer;
            display: block;
            float: left;
        }
        .rating-star:after {
            position: relative;
            font-family: FontAwesome;
            content:'\f006';
        }

        .rating-star.checked ~ .rating-star:after,
        .rating-star.checked:after {
            content:'\f005';
        }

        .rating:hover .rating-star:after {content:'\f006';}

        .rating-star:hover ~ .rating-star:after,
        .rating-star:hover:after {
            content:'\f005' !important;
        }

        .score {
            display: block;
            font-size: 16px;
            position: relative;
            overflow: hidden;
        }
        .score-wrap {
            display: inline-block;
            position: relative;
            height: 19px;
        }
        .score .stars-active {
            color: #FFCA00;
            position: relative;
            z-index: 10;
            display: inline-block;
            overflow: hidden;
            white-space: nowrap;
        }
        .score .stars-inactive {
            color: lightgrey;
            position: absolute;
            top: 0;
            left: 0;
            -webkit-text-stroke: initial;
            /* overflow: hidden; */
        }

        .my-dropdown {
            position: relative;
            display: inline-block;
            text-align:right;
        }

        .my-dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
            z-index: 1;
        }

        .my-dropdown:hover .my-dropdown-content {
            display: block;
        }

        .rating {
            overflow: hidden;
            display: inline-block;
            position: relative;
            font-size:20px;
            color: #FFCA00;
        }
        .rating-star {
            padding: 0 5px;
            margin: 0;
            cursor: pointer;
            display: block;
            float: left;
        }
        .rating-star:after {
            position: relative;
            font-family: FontAwesome;
            content:'\f006';
        }

        .rating-star.checked ~ .rating-star:after,
        .rating-star.checked:after {
            content:'\f005';
        }

        .rating:hover .rating-star:after {content:'\f006';}

        .rating-star:hover ~ .rating-star:after,
        .rating-star:hover:after {
            content:'\f005' !important;

        .bg-danger, .bg-success {
            padding: 16px 0;
            border-radius: 5px;
            text-align: center;
            margin: 0 auto;
            margin-bottom: 10px;
        }
        .card {
            text-align: right;
            direction: rtl;
        }
        .rating {
            overflow: hidden;
            display: inline-block;
            position: relative;
            font-size:20px;
            color: #FFCA00;
        }
        .rating-star {
            padding: 0 5px;
            margin: 0;
            cursor: pointer;
            display: block;
            float: left;
        }
        .rating-star:after {
            position: relative;
            font-family: FontAwesome;
            content:'\f006';
        }

        .rating-star.checked ~ .rating-star:after,
        .rating-star.checked:after {
            content:'\f005';
        }

        .rating:hover .rating-star:after {content:'\f006';}

        .rating-star:hover ~ .rating-star:after,
        .rating-star:hover:after {
            content:'\f005' !important;
        }

        .score {
            display: block;
            font-size: 16px;
            position: relative;
            overflow: hidden;
        }
        .score-wrap {
            display: inline-block;
            position: relative;
            height: 19px;
        }
        .score .stars-active {
            color: #FFCA00;
            position: relative;
            z-index: 10;
            display: inline-block;
            overflow: hidden;
            white-space: nowrap;
        }
        .score .stars-inactive {
            color: lightgrey;
            position: absolute;
            top: 0;
            left: 0;
            -webkit-text-stroke: initial;
            /* overflow: hidden; */
        }

        .my-dropdown {
            position: relative;
            display: inline-block;
            text-align:right;
        }

        .my-dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
            z-index: 1;
        }

        .my-dropdown:hover .my-dropdown-content {
            display: block;
        }
        .bg-danger, .bg-success {
            padding: 16px 0;
            border-radius: 5px;
            text-align: center;
            margin: 0 auto;
            margin-bottom: 10px;
        }
        .card {
            text-align: right;
            direction: rtl;
        }
        .rating {
            overflow: hidden;
            display: inline-block;
            position: relative;
            font-size:20px;
            color: #FFCA00;
        }
        .rating-star {
            padding: 0 5px;
            margin: 0;
            cursor: pointer;
            display: block;
            float: left;
        }
        .rating-star:after {
            position: relative;
            font-family: FontAwesome;
            content:'\f006';
        }

        .rating-star.checked ~ .rating-star:after,
        .rating-star.checked:after {
            content:'\f005';
        }

        .rating:hover .rating-star:after {content:'\f006';}

        .rating-star:hover ~ .rating-star:after,
        .rating-star:hover:after {
            content:'\f005' !important;
        }

        .score {
            display: block;
            font-size: 16px;
            position: relative;
            overflow: hidden;
        }
        .score-wrap {
            display: inline-block;
            position: relative;
            height: 19px;
        }
        .score .stars-active {
            color: #FFCA00;
            position: relative;
            z-index: 10;
            display: inline-block;
            overflow: hidden;
            white-space: nowrap;
        }
        .score .stars-inactive {
            color: lightgrey;
            position: absolute;
            top: 0;
            left: 0;
            -webkit-text-stroke: initial;
            /* overflow: hidden; */
        }

        .my-dropdown {
            position: relative;
            display: inline-block;
            text-align:right;
        }

        .my-dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
            z-index: 1;
        }

        .my-dropdown:hover .my-dropdown-content {
            display: block;
        }

        .rating {
            overflow: hidden;
            display: inline-block;
            position: relative;
            font-size:20px;
            color: #FFCA00;
        }
        .rating-star {
            padding: 0 5px;
            margin: 0;
            cursor: pointer;
            display: block;
            float: left;
        }
        .rating-star:after {
            position: relative;
            font-family: FontAwesome;
            content:'\f006';
        }

        .rating-star.checked ~ .rating-star:after,
        .rating-star.checked:after {
            content:'\f005';
        }

        .rating:hover .rating-star:after {content:'\f006';}

        .rating-star:hover ~ .rating-star:after,
        .rating-star:hover:after {
            content:'\f005' !important;
        }



        .score {
            display: block;
            font-size: 16px;
            position: relative;
            overflow: hidden;
        }
        .score-wrap {
            display: inline-block;
            position: relative;
            height: 19px;
        }
        .score .stars-active {
            color: #FFCA00;
            position: relative;
            z-index: 10;
            display: inline-block;
            overflow: hidden;
            white-space: nowrap;
        }
        .score .stars-inactive {
            color: lightgrey;
            position: absolute;
            top: 0;
            left: 0;
            -webkit-text-stroke: initial;
            /* overflow: hidden; */
        }

        .my-dropdown {
            position: relative;
            display: inline-block;
            text-align:right;
        }

        .my-dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
            z-index: 1;
        }

        .my-dropdown:hover .my-dropdown-content {
            display: block;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                     AWP_Rahaf_103359
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('cart.view') }}">

                                        <span class="badge badge-secondary"></span>


                                        العربة
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </li>
                        @endauth
                    </ul>


                     <!-- Right Side Of Navbar -->
                     <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">تسجيل الدخول</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">إنشاء حساب</a>
                            </li>
                        @else

                            <div dir="rtl" class="my-dropdown">
                                <span>{{ Auth::user()->name }} <span class="caret"></span></span>

                                <div class="my-dropdown-content">



                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                         تسجيل الخروج

                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>


                        @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
