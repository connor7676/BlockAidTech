<!DOCTYPE html>
@extends('layouts.app')

@section('content')
    {{-- <h1>{{$title}}</h1>

    @if(count($services) > 0)
        <ul>
            @foreach ($services as $i)
                <li class="list-group-item">{{$i}}</li>
            @endforeach
        </ul>
    @endif --}}

    <!-- ======= Services Section ======= -->
 <section id="services" class="services" style="padding-top: 150px">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Benefits</h2>
        <p>The Benefits of using BlockAid</p>
      </header>

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-box blue">
            <i class="ri-discuss-line icon"></i>
            <h3>Less Intermediaries</h3>
            <p>When making payments with a debit or credit card, the payment goes through multiple different intermediaries before reaching its final destination. Some intermediaries that are included in the transaction include: The financial institution that makes the payment to the seller, the payment gateway, an exchange like MasterCard or visa, and then the cardholder’s bank. The intermediaries are used to ensure the integrity of the transaction. Blockchain payments eliminate many of these intermediaries yet keep the integrity.</p>
    
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-box orange">
            <i class="ri-discuss-line icon"></i>
            <h3>Greater Safety</h3>
            <p>Blockchain payments allow for greater safety when it comes to making payments as compared to tradition transaction methods. Due to the transaction being much quicker, this leaves hackers with less time in which they can intercept that payment. Each entry into the blockchain becomes impossible to deny or disprove and becomes part of the ledger and cannot be edited. Blockchain helps to reduce fraud and personal data theft.</p>
           
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-box green">
            <i class="ri-discuss-line icon"></i>
            <h3>High Speed</h3>
            <p>Traditional payments between borders can take between 1-5 days and this is due to the need of multiple intermediaries. Since blockchain eliminates these intermediaries the transactions are much quicker. Due to this, a blockchain transaction can take around 1-2 hours for cross border payment (significantly quicker than traditional payments.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-box red">
            <i class="ri-discuss-line icon"></i>
            <h3>Low Cost</h3>
            <p>With traditional payments there can be added costs when it comes to sending money across border (or even within borders). There is usually an added costs of around 3%-10% of the payment for sending money across borders and if you are sending a lot of money this can get very expensive. With blockchain transactions there is a commission cost but at the moment the biggest commission is taken by bitcoin but this is only $0.35 which is significantly less than the traditional 3-10%.</p>
            
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-box purple">
            <i class="ri-discuss-line icon"></i>
            <h3>Anonymity</h3>
            <p>With traditional transactions there has been a lot of data theft and in 2018 the financial sector lost $4 billion because of it. With blockchain a user can be completely anonymous and safe at the same time. This is because blockchain does not need third parties to verify users, the network stores only the data it needs and blockchain is (for the most part) open source, i.e. anyone can check its content.</p>
            
          </div>
        </div>

        {{-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
          <div class="service-box pink">
            <i class="ri-discuss-line icon"></i>
            <h3>Dolori Architecto</h3>
            <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure. Corrupti recusandae ducimus enim.</p>
            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
          </div>
        </div> --}}

      </div>

    </div>

  </section><!-- End Services Section -->

@endsection