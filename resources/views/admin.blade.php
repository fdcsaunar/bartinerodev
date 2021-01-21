@extends('layouts.app')

@section('content')

<section id="admin">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-lg-8">

                <h1>Admin Panel</h1>

                <div class="messages">
                    @include('inc.messages')
                    @yield('content')
                </div>


                <div class="dashboard-grid">
    
                    <div class="messages">
                        @include('inc.messages')
                        @yield('content')
                    </div>
    
                    @if ($posts->count())
                
                    @foreach ($posts as $post)
    
                    <div class="listings">

                        <div class="listings-left align-items-center">
                            <h5><a href="/items/{{$post->id}}">{{ $post->title }}</a></h5>
                            <p>Posted by {{ $post->user->username }} | {{ $post->created_at->diffForHumans() }}</p>
                            <form action="{{ route('items.destroy', $post->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn"><i class="fas fa-trash"></i>Delete</button>
                            </form>
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


