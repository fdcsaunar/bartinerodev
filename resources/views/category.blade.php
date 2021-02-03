@extends('layouts.app')

@section('content')

<section id="single-category">
    <div class="container">

        <div class="single-category-hero">

            <div class="breadcrumbs-nav">
                <div class="bc-nav-left">
                    <a href="/categories"><i class="fas fa-chevron-left"></i>Return to Categories</a>
                </div>
            </div>
    
            <h1>{{$header}}</h1>
    
            <div class="hero-slider">
                <div><img src="{{ asset('img/'.$banner) }}" alt="" class="w-100"></div>
            </div>

        </div>

        <div class="latest-deals">

            <div class="row">

                @if ($posts->count())
    
                @foreach ($posts as $post)

                <div class="col-lg-3 col-md-4">

                    <div class="card">
    
                        <?php
                        $post->images = json_decode($post->images);
                        ?>

                        <div class="card-top">
                            <p><i class="far fa-clock"></i>{{ $post->created_at->diffForHumans() }}</p>
            
                            <img src="{{ asset('storage/img/'.$post->images[0]) }}" alt="" class="card-img-top">
                        </div>

                        

                        <div class="card-body">

                            <p class="card-subtitle"><i class="fas fa-user"></i>{{ $post->user->username }}</p>

                            <h5 class="card-title">
                                <a href="/items/{{$post->id}}">{{ $post->title }}</a>
                            </h5>

                            <hr>

                            <div class="cb-footer justify-content-between align-items-center d-flex">

                                <div>
                                    <p>POSTED IN</p>
                                    <a class="card-link" href="/category/{{ $post->category }}">{{ $post->category }}</a>
                                </div>
                                

                                <button><i class="far fa-heart"></i></button>

                            </div>

                            

                        </div>
                    </div>

                </div>
    
                
    
    
    
                @endforeach
    
                @else
    
                <p>There are currently no active listings.</p>
    
                @endif



            </div>


        </div>

        

    </div>
</section>




@endsection