@extends('layouts.app')

@section('content')

<section id="trade">

    <div class="container">

        <div class="row justify-content-center align-items-center">

            <div class="col-lg-4">

                <h1>What do you<br>have to barter?</h1>

                <div class="location">
                    <p><i class="fas fa-location-arrow"></i>You are posting from barangay.</p>
                </div>

                <form action="{{ route('items.store') }}" method="post" enctype="multipart/form-data">

                    @csrf

                    {{-- Listing title --}}
                    <div class="form-group">
                        <input type="text" class="form-control @error('title') form-error-inline @enderror" name="title" id="title" placeholder="What are you listing today?" value="{{ old('title') }}">

                            @error('title')
                                <div class="form-error">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>

                    {{-- Category --}}
                    <div class="form-group">
                        <select name="category" id="category" class="form-control @error('category') form-error-inline @enderror" value="{{ old('category') }}">
                            <option value="" selected disabled>Product Category</option>
                            <option value="Food" id="prodcat1">Food</option>
                            <option value="Electronics" id="prodcat2">Electronics</option>
                            <option value="Gardening" id="prodcat3">Gardening</option>
                            <option value="Clothing" id="prodcat4">Clothing</option>
                            <option value="Services" id="prodcat5">Services</option>
                            <option value="Automotives" id="prodcat6">Automotives</option>
                            <option value="Wellness" id="prodcat7">Wellness</option>
                            <option value="Furniture" id="prodcat8">Furniture</option>
                            <option value="Others" id="prodcat8">Others</option>
                        </select>

                        @error('category')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- Upload Image --}}
                    <div class="form-group upload-image">
                        <input type="file" name="images" id="images" class="form-control-file">
                    </div>

                    {{-- Body --}}
                    <div class="form-group">

                        <textarea class="form-control @error('description') form-error-inline @enderror" id="description" name="description" rows="3" placeholder="Tell us about the item or service you're listing..."></textarea>

                        @error('description')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <hr>

                    {{-- Barter --}}
                    <div class="form-group">

                        <input type="text" class="form-control @error('lookingfor') form-error-inline @enderror" name="lookingfor" id="lookingfor" placeholder="What would you like to trade for?" value="{{ old('barter') }}">

                        @error('lookingfor')
                            <div class="form-error">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <hr>

                    <div class="disclaimer justify-content-center">
                        <p>Please note that trading of medicines, firearms, or offering of malicious services are strictly prohibited. Termination of account will be the result if a user does not comply.</p>
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>

                </form>

            </div>

        </div>

    </div>

</section>

@endsection


