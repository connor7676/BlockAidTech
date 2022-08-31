@extends('layouts.app')

@section('content')
    {{-- <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p><a href="/login" class="btn btn-primary btn-lg">Login</a> <a href="/register" class="btn btn-success btn-lg">Register</a></p>
    </div> --}}

    <!-- ======= About Section ======= -->

    <section id="about" class="about">

            <div class="col-lg-6 mx-auto d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200" >
              <div class="content">
                <h3>Who We Are</h3>
                <h2>The providers of a safe, quick & efficient Peer-to-Peer crypto-currency payment gateway</h2>
                <p>
                  A bit of a mouthful, isn't is? We are all tired of the long queues at banks
                  and the promises from middle men financial institutions, who promise to do our cross border payments quickly. However, we always end up waiting for months on end!
                  We at Blockaid are here to provide you with a Bitcoin enabled payment gateway which allows you to do your transactions safely, quickly and efficiently, worldwide, at a minimal cost from the comfort of wherever you are. 
                  We are dedicated to helping you with all your transactional needs with our groundbreaking Peer-to-Peer payment gateway.
                </p>

              </div>
            </div>

            {{-- <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
              <img src="{{ asset('logo/Blockaid-logos_circle.png') }}" class="img-fluid" alt="">
            </div> --}}

          </div>
        </div>

      </section><!-- End About Section -->

      <!-- ======= Help Section ======= -->
    <section id="values" class="values">
    <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>Some Help</h2>
      <p>Let Us Help You Get Started</p>
    </header>

    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-Login-tab" data-bs-toggle="tab" data-bs-target="#nav-Login" type="button" role="tab" aria-controls="nav-Login" aria-selected="true">Login</button>
          <button class="nav-link" id="nav-Request-tab" data-bs-toggle="tab" data-bs-target="#nav-Request" type="button" role="tab" aria-controls="nav-Request" aria-selected="false">Request Payment</button>
        </div>
    </nav>


    

    <div class="tab-content" id="nav-tabContent">          
    <!-- <div class="tab-pane fade" id="nav-Login" role="tabpanel" aria-labelledby="nav-Login-tab"> -->
      <div class="tab-pane fade show active" id="nav-Login" role="tabpanel" aria-labelledby="nav-Login-tab">

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <img src="{{ asset('img/homepage/register.png') }}" class="img-fluid" alt="">
              <h3>Register</h3>
              <p>Step 1: Register quickly with just a few details.<br>
              </p>
            </div>
          </div>


          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="{{ asset('img/homepage/login.PNG') }}" class="img-fluid" alt="">
              <h3>Login</h3>
              <p>Step 2: Login with your newly registered account.
              </p>
            </div>
          </div>


          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="{{ asset('img/homepage/walletAd.PNG') }}" class="img-fluid" alt="">
              <h3>Wallet Address</h3>
              <p>Step 3: Don't forget to enter in you Bitcoin wallet address you'd be sending requests for.</p>
            </div>
          </div>

        </div><!-- End Row -->
      </div>
    <!-- </div> -->



      <div class="tab-pane fade" id="nav-Request" role="tabpanel" aria-labelledby="nav-Request-tab">
      
        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <img src="{{ asset('img/homepage/login.PNG') }}" class="img-fluid" alt="">
              <h3>Login</h3>
              <p>Step 1: Make sure you have logged into an existing account.</p>
            </div>
          </div>


          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="{{ asset('img/homepage/request.PNG') }}" class="img-fluid" alt="">
              <h3>Request</h3>
              <p>Step 2: Click the "Request" button on the Payment page.<br>
              </p>
            </div>
          </div>


          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="{{ asset('img/homepage/details.PNG') }}" class="img-fluid" alt="">
              <h3>Details</h3>
              <p>Step 3: Enter in the information of the person you wanting to send an invoice to, then sit tight for your payment to be made in a matter of minutes!</p>
            </div>
          </div>
        </div><!-- End Row -->

      </div> 
    </div>          
</div>

</section><!-- End Values Section --> 




      <!-- ======= Features Section ======= -->
      <section id="features" class="features">

        <div class="container" data-aos="fade-up">

          <header class="section-header">
            <h2>Features</h2>
            {{-- <p>Laboriosam et omnis fuga quis dolor direda fara</p> --}}
          </header>

          <div class="row">

            <div class="col-lg-6">
              <img src="{{ asset('img/features.png') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
              <div class="row align-self-center gy-4">

                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                  <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check"></i>
                    <h3>Bitcoin-enabled Peer-to-Peer Payments</h3>
                  </div>
                </div>

                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                  <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check"></i>
                    <h3>Safe & Secure Payments</h3>
                  </div>
                </div>

                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                  <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check"></i>
                    <h3>Reduced Waiting Times</h3>
                  </div>
                </div>

                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                  <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check"></i>
                    <h3>Cheaper Transaction Costs</h3>
                  </div>
                </div>

                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="600">
                  <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check"></i>
                    <h3>No Middle Men</h3>
                  </div>
                </div>

                <div class="col-md-6" data-aos="zoom-out" data-aos-delay="700">
                  <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check"></i>
                    <h3>Instant Receipt of Payment</h3>
                  </div>
                </div>

              </div>
            </div>

          </div> <!-- / row -->


        </div>

      </section><!-- End Features Section -->


                   


@endsection
