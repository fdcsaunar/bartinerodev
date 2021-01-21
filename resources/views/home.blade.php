@extends('layouts.app')

@section('content')

<section id="hero">

    <div class="container">

        <div class="row align-items-center justify-content-center">

            <div class="col-auto">
                <h1>A hub for the<br>Las Piñas barter<br>community.</h1>
                <div class="hero-cta">
                    <a href="/about" class="cta-regular">Why barter?</a>
                    <a href="/register" class="cta-filled">Start bartering now</a>
                </div>
            </div>

            <div class="col-lg-5">
                <img class="img-fluid" src="{{ asset('img/barter-arrows-alt.png') }}" alt="">
            </div>

        </div>

    </div>

</section>

<section id="hero-byline">
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-3 d-flex align-items-center">

                <div class="byline-text">
                    <h1><i class="fas fa-plus"></i>Post a deal</h1>
                    <p>Barter old or new items. Even services.</p>
                </div>

            </div>

            <div class="col-lg-3 d-flex align-items-center">
                <div class="byline-text">
                    <h1><i class="fas fa-mouse-pointer"></i>Choose an offer</h1>
                    <p>Plenty of options to choose from.</p>
                </div>
            </div>

            <div class="col-lg-3 d-flex align-items-baseline">
                <div class="byline-text">
                    <h1><i class="fas fa-handshake"></i>Trade with ease</h1>
                    <p>Communicate within the site.</p>
                </div>
            </div>

        </div>

    </div>
</section>

<section id="product-categories">

    <div class="container">

        <h1>Look for the things you need</h1>
        <p>Choose among these categories for new or used items and services</p>



        <div class="row justify-content-around">

            <div class="col">
                <a href="/category/food">
                    <i class="fas fa-utensils"></i>
                    <h3>Food</h3>
                </a>
            </div>

            <div class="col">
                <a href="/category/electronics">
                    <i class="fas fa-mobile"></i>
                    <h3>Electronics</h3>
                </a>
            </div>

            <div class="col">
                <a href="/category/gardening">
                    <i class="fas fa-leaf"></i>
                    <h3>Gardening</h3>
                </a>
            </div>

            <div class="col">
                <a href="/category/clothing">
                    <i class="fas fa-tshirt"></i>
                    <h3>Clothing</h3>
                </a>
            </div>

            <div class="col">
                <a href="/category/services">
                    <i class="fas fa-tools"></i>
                    <h3>Services</h3>
                </a>
            </div>

            <div class="col">
                <a href="/category/automotives">
                    <i class="fas fa-car"></i>
                    <h3>Automotives</h3>
                </a>
            </div>

            <div class="col">
                <a href="/category/wellness">
                    <i class="fas fa-heart"></i>
                    <h3>Wellness</h3>
                </a>
            </div>

            <div class="col">
                <a href="/category/furniture">
                    <i class="fas fa-couch"></i>
                    <h3>Furniture</h3>
                </a>
            </div>

            <div class="col">
                <a href="/category/others">
                    <i class="fas fa-shapes"></i>
                    <h3>Others</h3>
                </a>
            </div>

        </div>

    </div>

</section>

<section id="latest-deals">

    <div class="container">

        <h1>Check out these latest deals</h1>
        <p>Start trading with a Las Piñero</p>

        <div class="wrapper">

            @if ($posts->count())

            @foreach ($posts as $post)

            <div class="card">
                <?php
                $post->images = json_decode($post->images);
                ?>

                <div class="card-top">
                    <a href="/items/{{$post->id}}"><img src="{{ asset('storage/img/'.$post->images[0]) }}" alt="" class="card-img-top"></a>
                </div>
                <div class="card-body">
                    <p>{{ $post->user->username }} • {{ $post->category }} • {{ $post->created_at->diffForHumans() }}</p>
                    <h5 class="card-title">
                        <a href="/items/{{$post->id}}">{{ $post->title }}</a>
                    </h5>
                </div>
            </div>

            @endforeach

            @else

            <p>There are currently no active listings.</p>

            @endif

        </div>

        <div class="ld-cta justify-content-center d-flex"><a href="/items" class="cta-regular">View more posts</a></div>

    </div>

</section>

@endsection