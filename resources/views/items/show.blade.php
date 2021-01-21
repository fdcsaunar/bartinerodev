@extends('layouts.app')

@section('content')

<section id="single">

    <div class="container">

        <div class="single-nav justify-content-between d-flex">

            <div class="sn-left">
                <a href="/category/{{ $post->category }}"><i class="fas fa-chevron-left"></i>Return to latest items</a>
            </div>

            <div class="sn-right d-flex">
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

        <div class="row justify-content-center align-items center">

            <div class="col-lg-6 gallery">
                @foreach($post->images as $image)
                    <div><img src="{{ asset('storage/img/'.$image) }}" alt="" class="img-fluid"></div>
                @endforeach
            </div>

            <div class="col-lg-6">
                
                <div class="post-header justify-content-between d-flex">
                    <div class="phleft">
                        <a href="/category/{{ $post->category }}"><i class="fas fa-mobile"></i>{{ $post->category }}</a>
                    </div>
                    <div class="phright d-flex">
                        <p><i class="fas fa-clock"></i>{{ $post->created_at->diffForHumans() }}</p>
                        <p><i class="fas fa-location-arrow"></i>{{ $post->user->barangay }}</p>
                    </div>
                    
                    
                </div>

                <hr>

                <h1>{{ $post->title }}</h1>

                <div class="exchange-body">

                    <h3>I am looking for...</h3>
                    <h2>{{ $post->lookingfor }}</h2>

                    <form action="">

                        <div class="form-group">
                            <input type="text" name="offer" id="offer" placeholder="Do you have what they're looking for? Make an offer now!">
                        </div>

                        <button type="submit">Make an offer</button>

                    </form>
                    
                </div>

                <p class="description">{{ $post->description }}</p>

                <div class="about-user">

                    <div class="user-header justify-content-between d-flex">
                        <div class="uhleft d-flex align-items-center">
                            <i class="fas fa-user"></i><h2>{{ $post->user->username }}</h2>
                        </div>
                        <div class="uhright d-flex align-items-center">
                            <p>Member since {{ $post->user->created_at->diffForHumans() }}</p>
                        </div>

                        
                    </div>

                    <p></p>

                </div>


            </div>


        </div>

    </div>

</section>






{{-- <section id="single">

    <div class="container">

        <div>
            <a href="/items" class="cta-regular">Return to latest items</a>
        </div>

        <div class="row justify-content-center">

            <div class="col-lg-6">

                <div class="gallery card-top d-flex justify-content-center align-items-center">

                    @foreach($post->images as $image)
                    <div><img src="{{ asset('storage/img/'.$image) }}" alt="" class="img-fluid"></div>
                    @endforeach

                </div>

            </div>

            <div class="col-lg-6">

                <div class="item-header">

                    <div class="head-links d-flex justify-content-between">

                        <div class="d-flex">

                            <div><p>{{ $post->user->username }} • {{ $post->category }} • {{ $post->created_at->diffForHumans() }}</p></div>

                            
                        </div>

                    </div>


                   
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

</section> --}}


@endsection