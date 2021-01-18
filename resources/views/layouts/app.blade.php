<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bartinero | a Las Piñas online barter community</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/7586c5b6d3.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app"> 
        <nav class="navbar navbar-expand-md navbar-light sticky-top bg-white">
            <div class="container">
                <a href="{{ url('/') }}" class="navbar-brand">
                    <img src="{{ asset('img/bart_logo_full.svg') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <ul class="navbar-nav">

                        <form class="form-inline mr-auto ml-auto" method="get" action="/search">
                            <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search an item..." aria-label="Search" required>
                            {{-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> --}}
                        </form>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Categories
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="/categories">All Categories</a>

                                <a class="dropdown-item" href="/category/food"><i class="fas fa-utensils"></i>Food</a>
                                
                                <a class="dropdown-item" href="/category/electronics"><i class="fas fa-mobile"></i>Electronics</a>

                                <a class="dropdown-item" href="/category/gardening"><i class="fas fa-leaf"></i>Gardening</a>

                                <a class="dropdown-item" href="/category/clothing"><i class="fas fa-tshirt"></i>Clothing</a>

                                <a class="dropdown-item" href="/category/services"><i class="fas fa-tools"></i>Services</a>

                                <a class="dropdown-item" href="/category/automotives"><i class="fas fa-car"></i>Automotives</a>

                                <a class="dropdown-item" href="/category/wellness"><i class="fas fa-heart"></i>Wellness</a>

                                <a class="dropdown-item" href="/category/furniture"><i class="fas fa-couch"></i>Furniture</a>

                                <a class="dropdown-item" href="/category/others"><i class="fas fa-shapes"></i>Others</a>



                            </div>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('items.create') }}" class="nav-link altrade">Trade</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->firstname }}
                                </a>

<<<<<<< HEAD
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>

                            <li class="nav-item">
                                <a href="{{ route('items.create') }}" class="nav-link altrade">Trade</a>
                            </li>
                        </li>
=======
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

                                <li class="nav-item">
                                    <a href="{{ route('items.create') }}" class="nav-link altrade">Trade</a>
                                </li>
                            </li>
>>>>>>> 5e328cbb58e13e6c477bb31152ec4b20c99324d9
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

<footer>

    <div class="container">
        
        <div class="row justify-content-between">

            <div class="col">
                <a href="/"><img src="{{ asset('img/bart_logo_solo.svg') }}" class="img-fluid" alt=""></a>
            </div>

            <div class="links">

                <div class="col-auto">
                    <h4>BARTER</h4>
                    <ul>
                        <li><a href="/categories">Categories</a></li>
                        <li><a href="/items">Deals</a></li>
                        <li><a href="/items/create">Trade</a></li>
                    </ul>
                </div>
    
                <div class="col-auto">
                    <h4>ABOUT</h4>
                    <ul>
                        <li><a href="/about">About</a></li>
                        <li><a href="/about#questions">Questions</a></li>
                        <li><a href="/about#prohibited">Prohibited Items</a></li>
                    </ul>
                </div>
    
                <div class="col-auto">
                    <h4>ACCOUNT</h4>
                    <ul>
                        <li><a href="/register">Sign Up</a></li>
                        <li><a href="/login">Log In</a></li>
                        <li><a href="/dashboard">Profile</a></li>
                        <li><a href="/dashboard">Messages</a></li>
                    </ul>
                </div>
    
                <div class="col-auto">
                    <h4>POLICY CENTER</h4>
                    <ul>
                        <li><a href="/terms-and-conditions#privacy-policy">Privacy Policy</a></li>
                        <li><a href="/terms-and-conditions">Terms and Conditions</a></li>
                    </ul>
                </div>

            </div>

        </div>

    </div>

</footer>
</html>
