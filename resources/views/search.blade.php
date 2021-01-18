@extends('layouts.app')

@section('content')

<section id="featured-deals">

    <div class="container">

        <h1>Search results for keyword "{{$keyword}}"</h1>
        <p>Start trading with a Las Piñero</p>

        <div class="wrapper">

            @if (count($postSearch)>0)

            @foreach ($postSearch as $post)

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

        <h1 style="margin-top: 2rem;">What people are looking for...</h1>

        <div class="wrapper">

            @if (count($postLooking)>0)

            @foreach ($postLooking as $post)

            <div class="card">

                <div class="card-body">
                    <p>{{ $post->created_at->diffForHumans() }}</p>
                    <p>{{ $post->user->username }} is looking for...</p>
                    <h5 class="card-title">
                        <a href="/items/{{$post->id}}">{{ $post->lookingfor }}</a>
                    </h5>
                </div>
            </div>

            @endforeach

            @else

            <p>There are currently no active listings.</p>

            @endif

        </div>


        <h1 style="margin-top: 2rem;">Users</h1>

        <div class="wrapper">
            @if (count($users)>0)

            @foreach ($users as $user)
            <div class="card">
                <div class="card-body">
                    <p><b>Name:</b> {{ $user->firstname }} {{ $user->lastname }}</p>
                    <p><b>Gender:</b> {{ $user->gender }}</p>
                    <p><b>Email:</b> {{ $user->email }}</p>
                    <p><b>Mobile:</b> {{ $user->mobile }}</p>
                    <p><b>Address:</b> {{ $user->address }}</p>
                </div>
            </div>
            @endforeach
            @else
            <p>No user found.</p>
            @endif
        </div>

    </div>

</section>


@endsection