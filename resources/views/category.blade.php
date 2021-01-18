@extends('layouts.app')

@section('content')

<section id="categories-hero">
    <div class="container">
        <div class="hero-slider">
            <div><img src="{{ asset('img/'.$banner) }}" alt="" class="w-100"></div>
        </div>
    </div>
</section>

<section id="featured-deals">

    <div class="container">

        <h1>Category</h1>

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