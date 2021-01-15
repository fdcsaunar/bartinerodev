@extends('layouts.app')

@section('content')

<section id="login">

    <div class="container">

        <h2>Log in</h2>

        <div class="row justify-content-center">

            <div class="col-lg-3">

                @if (session('status'))
                    <div class="alert alert-danger">
                        <ul>
                            {{ session('status') }}
                        </ul>
                    </div>
                @endif

                {{-- Register Form --}}
                <form action="{{ route('login') }}" method="post" id="register-form">

                    @csrf

                    {{-- Username --}}
                    <div class="form-group">

                        <input type="email" class="form-control @error('email') form-error-inline @enderror" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror
                        
                    </div>

                    {{-- Password --}}
                    <div class="form-group">

                        <input type="password" class="form-control @error('password') form-error-inline @enderror" name="password" id="password" placeholder="Password" required autocomplete="current-password">

                            @error('password')
                                <div class="form-error">
                                    {{ $message }}
                                </div>
                            @enderror
                        
                    </div>

                    <button type="submit" class="btn btn-primary">Log in</button>

                    <div class="form-footer justify-content-center align-items-center d-flex">

                        <div class="remember">
                            {{-- Remember Me --}}
                            <div class="form-group d-flex justify-content-center checkterms">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="forgot">
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                        
                    </div>

                </form>

            </div>

        </div>

</section>

@endsection