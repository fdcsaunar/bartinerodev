@extends('layouts.site')

@section('content')

    <section id="single">

        <div class="container">

            <div class="header-navs">
                <a href="/items">Return to latest items</a>
            </div>

            <div class="row justify-content-center">

                <div class="col-lg-6">

                    <div class="gallery">

                        {{-- insert slick here --}}

                    </div>

                    

                </div>

                <div class="col-lg-4">

                    <div class="item-header">

                        <p>{{-- get user id here --}} • {{ $post->created_at->diffForHumans() }}</p>
                        <h1>{{ $post->title }}</h1>

                    </div>

                    <div class="item-body">

                        <p>{{ $post->description }}</p>

                        

                        <div class="item-looking">

                            <h2>I am looking for...</h2>

                            <p>{{ $post->lookingfor }}</p>

                        </div>

                    </div>

                    

                    
                    
                </div>

            </div>


        </div>

        




    </section>


@endsection


