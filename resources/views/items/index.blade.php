@extends('layouts.app')

@section('content')

    <section id="new-deals">

        <div class="container">

            <div class="deals-header d-flex justify-content-between">
                <div class="section-header">
                    <h1>Latest deals</h1>
                </div>
                <div class="sorting d-flex">
                    <p>Sort by date</p>
                    <p>Sort by category</p>
                </div>
            </div>

            <div class="messages">
                @include('inc.messages')
                @yield('content')
            </div>

            <div class="wrapper">

                    @if ($posts->count())
                    
                    @foreach ($posts as $post)

                    <div class="card">
                        
                        <div class="card-top">
                            <img src="{{ asset('img/img-placeholder.png') }}" alt="" class="card-img-top">
                        </div>
                        
                        <div class="card-body">
                            <a href="" class="user-link">{{ $post->user->name }}</a>
                            <span>• {{ $post->created_at->diffForHumans() }}</span>
                            <h5 class="card-title">
                                <a href="/items/{{$post->id}}">{{ $post->title }}</a>
                            </h5>
                        </div>
                    </div>

                    @endforeach

                    @else

                    <h1>There are currently no active listings.</h1>

                    <p>There are currently no active listings.</p>

                    @endif

            </div>

            

        </div>


    </section>


@endsection


