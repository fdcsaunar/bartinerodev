@extends('layouts.app')

@section('content')

<section id="single">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-6">
                <div class="gallery">
                    @foreach($post->images as $image)
                    <div><img src="{{ asset('storage/img/'.$image) }}" alt="" class="img-fluid"></div>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-4">

                <div class="item-header">

                    <div class="head-links d-flex justify-content-between">

                        <div><a href="/items" class="cta-regular">Return to latest items</a></div>

                        <div class="d-flex">

                            @if(!Auth::guest())
                            @if(Auth::user()->id == $post->user_id)
                            <a href="/items/{{$post->id}}/edit" class="btn"><i class="fas fa-edit"></i>Edit</a>

                            <form action="{{ route('items.destroy', $post->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn"><i class="fas fa-trash"></i>Delete</button>
                            </form>
                            @endif
                            @endif
                        </div>

                    </div>


                    <p>{{ $post->user->username }} • {{ $post->category }} • {{ $post->created_at->diffForHumans() }}</p>
                    <h1>{{ $post->title }}</h1>

                </div>

                <div class="item-body">

                    <p>{{ $post->description }}</p>

                    <div class="item-looking">

                        <h2>I am looking for...</h2>

                        <p>{{ $post->lookingfor }}</p>

                    </div>

                    <div class="user-offers">

                        <input type="text" placeholder="Make an offer?">
                        <button class="btn active">Send Deal</button>

                    </div>


                </div>





            </div>

        </div>


    </div>






</section>


@endsection