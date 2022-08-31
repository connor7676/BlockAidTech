@extends('layouts.app')

@section('content')

<br>
<br>
<br>
<br>
    
 <!-- ======= Watchlist section ======= -->
 <section id="watchlist" class="watchlist">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Watchlist</h2>
        <p>Track Bitcoin </p>
      </header>
    </div>
  
    <br>

    <div class = "container" data-aos="fade-up" data-aos-duration="400">

      <header class = "section-header">
        <h2>Bitcoin price graph in United States Dollar</h2>
      </header>

        <!-- ======= ZAR Graph ======= -->
        <script type="text/javascript">
            baseUrl = "https://widgets.cryptocompare.com/";
            var scripts = document.getElementsByTagName("script");
            var embedder = scripts[ scripts.length - 1 ];
            var cccTheme = {"General":{"borderRadius":"10px"},"Conversion":{"lineHeight":"10px"}};
            (function (){
            var appName = encodeURIComponent(window.location.hostname);
            if(appName==""){appName="local";}
            var s = document.createElement("script");
            s.type = "text/javascript";
            s.async = true;
            var theUrl = baseUrl+'serve/v2/coin/chart?fsym=BTC&tsym=USD&period=1W';
            s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
            embedder.parentNode.appendChild(s);
            })();
        </script>
    </div>

    <br>
    <br>

    <div class = "container" data-aos="fade-up">

      <!-- ======= Prices Tiles======= -->
      <script type="text/javascript">
        baseUrl = "https://widgets.cryptocompare.com/";
        var scripts = document.getElementsByTagName("script");
        var embedder = scripts[ scripts.length - 1 ];
        (function (){
        var appName = encodeURIComponent(window.location.hostname);
        if(appName==""){appName="local";}
        var s = document.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        var theUrl = baseUrl+'serve/v1/coin/tiles?fsym=BTC&tsyms=BTC,ZAR,USD,EUR,GBP';
        s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
        embedder.parentNode.appendChild(s);
        })();
        </script>
        
    </div>

    
  </section><!-- End watchlist section -->



@endsection