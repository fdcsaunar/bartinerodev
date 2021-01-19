@extends('layouts.app')

@section('content')

<section id="about-hero">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-lg-4">

                <h1>For Las Piñeros by Las Piñeros.</h1>
                <p>Bartinero aims to provide a hassle-free barter experience for the Las Pinas community. This is the website unifies bartering communities on social media. No need to look for the right group to join in to. This is the place to be.</p>

                <div class="hero-cta">
                    <a href="/about#questions" class="cta-regular">How do I barter?</a>
                    <a href="/register" class="cta-filled">Start bartering now</a>
                </div>

            </div>

            <div class="col-lg-4">
                <img class="img-fluid" src="{{ asset('img/laspinasmap.svg') }}" alt="">
            </div>

        </div>
    </div>
</section>

<section id="about-more">
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">
                            Bartering doesn't involve money.
                        </h1>
                        <p>Trade an item you own or service you can render for what you want or need.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">
                            Bartering is environment-friendly.
                        </h1>
                        <p>It not only saves money but also helps reduce waste.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">
                            Bartering empowers your community.
                        </h1>
                        <p>Forge and strengthen your relationships with neighbors and friends in the Las Piñas area.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<section id="questions">
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <h1>Questions</h1>

                <div class="faq">
                    <button onclick="question1()"><h3 id="header1">How does bartering work?</h3></button>
                    <div id="answer1">
                        <p>It's simple. First, look for an item or service that you want. Second, make an offer for it. Third, wait for a response.</p>
                    </div>
                </div>

                <div class="faq">
                    <button onclick="question2()"><h3 id="header2">Is it free to join Bartinero?</h3></button>
                    <div id="answer2">
                        <p>Of course. Bartinero will not ask you to pay when signing up for an account.</p>
                    </div>
                </div>

                <div class="faq">
                    <button onclick="question3()"><h3 id="header3">What are the requirements to verify my account?</h3></button>
                    <div id="answer3">
                        <p>The user must be a citizen of Las Pinas City and should provide a valid ID that is not expired at the time of submission.</p>
                    </div>
                </div>

                <div class="faq">
                    <button onclick="question4()"><h3 id="header4">Why do I need to submit an ID?</h3></button>
                    <div id="answer4">
                        <p>We want to ensure that the people you will be trading with are real. This will help us prevent malicious intents.</p>
                    </div>
                </div>

                <div class="faq">
                    <button onclick="question5()"><h3 id="header5">How soon will my account be verified?</h3></button>
                    <div id="answer5">
                        <p>It will take up a day or two to verify your account. Once approved, you will receive a notification through email. Otherwise, you will be asked again to submit again.</p>
                    </div>
                </div>

                <div class="faq">
                    <button onclick="question6()"><h3 id="header6">Am I allowed to use money when trading?</h3></button>
                    <div id="answer6">
                        <p>No. Users are not allowed to participate in any kind of monetary transaction. Bartering doesn't require the use of real money.</p>
                    </div>
                </div>

                <div class="faq">
                    <button onclick="question7()"><h3 id="header7">How will I receive my bartered items?</h3></button>
                    <div id="answer7">
                        <p>Receiving of items will be entirely up to the agreement between the two parties in a trade. Currently, Bartinero does not support delivery options.</p>
                    </div>
                </div>

                <div class="faq">
                    <button onclick="question8()"><h3 id="header8">What are the items that I cannot barter?</h3></button>
                    <div id="answer8">
                        <p>Bartinero does not allow users to the trade the following: Medicine, firearms, and malicious services.</p>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<script>
    function question1() {
      document.getElementById("header1").style.color = "black";
      var x = document.getElementById("answer1");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }

    function question2() {
        document.getElementById("header2").style.color = "black";
      var x = document.getElementById("answer2");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }

    function question3() {
        document.getElementById("header3").style.color = "black";
      var x = document.getElementById("answer3");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }

    function question4() {
        document.getElementById("header4").style.color = "black";
      var x = document.getElementById("answer4");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }

    function question5() {
        document.getElementById("header5").style.color = "black";
      var x = document.getElementById("answer5");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }

    function question6() {
        document.getElementById("header6").style.color = "black";
      var x = document.getElementById("answer6");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }

    function question7() {
        document.getElementById("header7").style.color = "black";
      var x = document.getElementById("answer7");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }

    function question8() {
        document.getElementById("header8").style.color = "black";
      var x = document.getElementById("answer8");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
</script>


{{-- 
<section id="questions">
    <div class="container">
        <div class="row justify-content-center" style="margin-bottom: 2rem;">
    
            <div class="col-lg-7">
                <h1>Questions</h1>

                <h3>How does bartering work?</h3>
                <p>It's simple. First, look for an item or service that you want. Second, make an offer for it. Third, wait for a response.</p>

                <h3>Is it free to join Bartinero?</h3>
                <p>Of course. Bartinero will not ask you to pay when signing up for an account.</p>

                <h3>What are the requirements to verify my account?</h3>
                <p>The user must be a citizen of Las Pinas City and should provide a valid ID that is not expired at the time of submission.</p>

                <h3>Why do I need to submit an ID?</h3>
                <p>We want to ensure that the people you will be trading with are real. This will help us prevent malicious intents.</p>

                <h3>How soon will my account be verified?</h3>
                <p>It will take up a day or two to verify your account. Once approved, you will receive a notification through email. Otherwise, you will be asked again to submit again.</p>

                <h3>Am I allowed to use money when trading?</h3>
                <p>No. Users are not allowed to participate in any kind of monetary transaction. Bartering doesn't require the use of real money.</p>

                <h3>How will I receive my bartered items?</h3>
                <p>Receiving of items will be entirely up to the agreement between the two parties in a trade. Currently, Bartinero does not support delivery options.</p>

                <h3>What are the items that I cannot barter?</h3>
                <p>Bartinero does not allow users to the trade the following: Medicine, firearms, and malicious services.</p>
            </div>
        </div>
        
        </div>
    </div>
</section> --}}

@endsection


