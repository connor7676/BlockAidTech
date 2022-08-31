@extends('layouts.app')

@section('content')

<br>
<br>
<br>
<br>


<!-- ======= Who we are Section ======= -->

<section id="who" class="who">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Who we are</h2>
        <p>The providers of a safe, quick & efficient crypto-currency payment gateway</p>
      </header>
        <p>
        Are you tired of long queues at the bank?
        Or promises from middle men financial institutions who promise to do your cross border payments quickly, but you end up waiting for months?
        If that is you, Blockaid is here to provide you with a peer to peer Bitcoin enabled payment gateway which allows you to do your transactions
        safely, quickly and efficiently at a minimal cost from the comfort of wherever you are.
        <br>
        <br>
        We aim to use new technologies such as blockchain technologies to increase the speeds at which you can send money to friends, family, or anyone you like.
        More importantly the blockchain technolgies can decrease your international transaction times from a few days to only a few minutes!

        </p>
    </div>
  </section>

  <section id="how" class="how">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <p>How it works</p>
      </header>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras urna dolor, semper eget tellus id, lobortis cursus ligula. Donec fermentum tristique imperdiet.
            Quisque blandit orci at ligula interdum, et elementum ante feugiat. Duis vel arcu a nibh interdum volutpat. Proin dui mauris, gravida eget mattis pharetra,
            tempor at nisi. Sed sem enim, convallis a iaculis vitae, viverra a mauris. Pellentesque mattis sodales elit, id porta dui dictum quis. Aenean mollis tincidunt ante,
            et fringilla arcu molestie in.

        </p>
    </div>
  </section>


 <!-- ======= Team Section ======= -->
 <section id="team" class="team">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Team</h2>
        <p>Our hard working team</p>
      </header>

      <div class="row gy-4">

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <div class="member-img">
              <img src="{{ asset('img/team/TC.jpeg') }}" class="img-fluid" alt="">
              <!--
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            -->
            </div>
            <div class="member-info">
              <h4>Thelma Chitsa</h4>
              <span>Project Manager</span>

            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="member">
            <div class="member-img">
              <img src="{{ asset('img/team/Tim.jpeg') }}" class="img-fluid" alt="">
              <!--
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            -->
            </div>
            <div class="member-info">
              <h4>Tim Wright</h4>
              <span>Scrum Master</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="member">
            <div class="member-img">
              <img src="{{ asset('img/team/Mufaro2.jpeg') }}" class="img-fluid" alt="">
              <!--
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            -->
            </div>
            <div class="member-info">
              <h4>Mufaro Nyangari</h4>
              <span>Business Analyst</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="member">
            <div class="member-img">
              <img src="{{ asset('img/team/Connor.jpeg') }}" class="img-fluid" alt="">
              <!--
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            -->
            </div>
            <div class="member-info">
              <h4>Connor Stevens</h4>
              <span>Developer</span>
            </div>
          </div>
        </div>

      </div>

    </div>

  </section><!-- End Team Section -->


  <!-- ======= Contact Section =======
<section id="contact" class="contact">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </header>


        <center>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" class="php-email-form">
            <div class="row gy-4">

              <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
              </div>

              <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
              </div>

              <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
              </div>

              <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
              </div>

              <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
              </div>
            </center>
            </div>
          </form>

        </div>

      </div>

    </div>

  </section> End Contact Section -->


@endsection
