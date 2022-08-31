@extends('layouts.app')

@section('content')
    <br>
    <br>
    <br>
     <!-- ======= Process Section ======= -->
 <section id="testimonials" class="testimonials">

    <div class="container" data-aos="fade-up">
  
      <header class="section-header">
        <!-- <h2>Process</h2> -->
        <p>Process</p>
      </header>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="profile mt-auto">
                <img src="{{ asset('img/process/payment.png') }}" class="testimonial-img" alt="">
                <h3>Step 8</h3>

              </div>
              <p>
                Finally, once the payment is confirmed, the crypto is thus received in the recipient’s 	crypto wallet
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="profile mt-auto">
                <img src="{{ asset('img/process/step 1.png') }}" class="testimonial-img" alt="">
                <h3>Step 1</h3>

              </div>
              <p>
                Firstly, a transaction is requested. This is done by the user, who signs off a transaction 	message, by simply clicking the “send” button in their crypto wallet. This message has 	information about the sender, recipient, and the amount being sent.
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="profile mt-auto">
                <img src="{{ asset('img/process/step 2.png') }}" class="testimonial-img" alt="">
                <h3>Step 2</h3>

              </div>
              <p>
                The wallet then groups this with a unique digital signature for this message, by 		mathematically mixing the message with the customer’s private key and combining this 	into a small file called a block.
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="profile mt-auto">
                <img src="{{ asset('img/process/mempool.jpg') }}" class="testimonial-img" alt="">
                <h3>Step 3</h3>

              </div>
              <p>
                This block is then broadcasted to all nodes on a network with a copy of the 		blockchain. This is done by moving the block into a space called the Mem-pool.
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="profile mt-auto">
                <img src="{{ asset('img/process/verification.jpg') }}" class="testimonial-img" alt="">
                <h3>Step 4</h3>

              </div>
              <p>
                Each node that receives the file, verifies the legitimacy of said file and holds it in a mem-	pool. This is a place where nodes hold valid yet unconfirmed transactions.
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="profile mt-auto">
                <img src="{{ asset('img/process/speed.png') }}" class="testimonial-img" alt="">
                <h3>Step 5</h3>

              </div>
              <p>
                From this, miners are incentivised to fight to decrypt blocks in the mem-pool as fast as 	possible to get a reward. When there is Proof of Work, the node receives the reward.
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="profile mt-auto">
                <img src="{{ asset('img/process/confirmation.png') }}" class="testimonial-img" alt="">
                <h3>Step 6</h3>

              </div>
              <p>
                Miners confirm these transactions by performing mathematical computations to add 	the pending blocks to the blockchain.
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="profile mt-auto">
                <img src="{{ asset('img/process/add.png') }}" class="testimonial-img" alt="">
                <h3>Step 7</h3>

              </div>
              <p>
                This new updated chain is then distributed throughout the whole network.
              </p>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </section><!-- End Testimonials Section -->

  

@endsection