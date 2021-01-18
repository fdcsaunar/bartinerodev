@extends('layouts.app')

@section('content')

<section id="categories-hero">
    <div class="container">
        <div class="hero-slider">
            <div><img src="{{ asset('img/cat-banner-sample.png') }}" alt="" class="w-100"></div>
        </div>
    </div>
</section>

<section id="categories-menu">

    <div class="container">

        <h1>Choose a category</h1>



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
                <a href="/category">
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

<section id="featured-deals">

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
                    <img src="{{ asset('storage/img/'.$post->images[0]) }}" alt="" class="card-img-top">
                </div>

                <div class="card-body">
                    <p>{{ $post->user->name }} • {{ $post->category }} • {{ $post->created_at->diffForHumans() }}</p>
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

    </div>

</section>



@endsection