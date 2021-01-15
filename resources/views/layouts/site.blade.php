<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://kit.fontawesome.com/7586c5b6d3.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <title>Bartinero | a Las Piñas online barter community</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg justify-content-between sticky-top">

        <div class="container">

            <a href="/" class="navbar-brand">
                <img src="{{ asset('img/bart_logo_full.svg') }}" alt="">
            </a>

            <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">

                <form class="form-inline mr-auto ml-auto">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search an item..." aria-label="Search">
                </form>

                <ul class="navbar-nav">

                    @if (Route::has('login'))
                    
                        @auth

                            <li class="nav-item">
                                <a href="/" class="nav-link">Categories</a>
                            </li>

                            <li class="nav-item altnav">
                                <div class="dropdown">

                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</button>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                        <a class="dropdown-item" href="/">Dashboard</a>

                                        <form action="/" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Log Out</button>
                                        </form> 

                                    </div>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="/trade" class="nav-link altrade">Trade</a>
                            </li>

                        @else

                            <li class="nav-item">
                                <a href="/" class="nav-link">Categories</a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">Log In</a>
                            </li>

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-link">Sign Up</a>
                                </li>
                            @endif
                            
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link">Trade</a>
                            </li>

                        @endauth
                    
                    @endif    

                </ul>

            </div>

        </div>

    </nav>

    @yield('content')
       
</body>

<footer>

    <div class="container">
        
        <div class="row justify-content-between">

            <div class="col">
                <a href="/"><img src="{{ asset('img/bart_logo_solo.svg') }}" class="img-fluid" alt=""></a>
            </div>

            <div class="links d-flex">

                <div class="col-auto">
                    <h4>BARTER</h4>
                    <ul>
                        <li><a href="/">Categories</a></li>
                        <li><a href="/">Deals</a></li>
                        <li><a href="/">Trade</a></li>
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
                        <li><a href="/">Sign Up</a></li>
                        <li><a href="/">Log In</a></li>
                        <li><a href="/">Profile</a></li>
                        <li><a href="/">Messages</a></li>
                    </ul>
                </div>
    
                <div class="col-auto">
                    <h4>POLICY CENTER</h4>
                    <ul>
                        <li><a href="/privacy-policy">Privacy Policy</a></li>
                        <li><a href="/terms-and-conditions">Terms and Conditions</a></li>
                    </ul>
                </div>

            </div>

            

        </div>

    </div>

</footer>


</html>