@extends('layouts.app')

@section('content')
<?php use SimpleSoftwareIO\QrCode\Facades\QrCode; ?>
<br>
<br>
<br>

<div class="py-5">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-header">
                        <h3>Invoice</h3>
                    </div>

                    <div class="card-body">

                        <div class="row">

                            <div class="col-md-12">

                                <div class="row">

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="">Invoice Number</label>
                                            <input type="text" class="form-control" value="{{ $invoice->code }}" readonly>
                                        </div>
                
                                        <div class="form-group">
                                            <label for="">Invoice Address</label>
                                            <input id="address" type="text" class="form-control" value="{{ $invoice->address }}" readonly>
                                        </div>
            
                
                                        <div class="form-group">
                                            <label for="">Invoice Status</label>
                                            <?php
                                            if ($invoice->status == 0) {
                                                $status = "Pending";
                                            } elseif ($invoice->status == 1) {
                                                $status = "Paid";
                                            } elseif ($invoice->status == 2) {
                                                $status = "Cancelled";
                                            }
                                            ?>
                                            <input type="text" class="form-control" value="{{ $status }}" readonly>
                                        </div>
                
                                        <?php
                                        // $getPrice = Http::get('https://www.blockonomics.co/api/price?currency=USD');
                                        // $BTCprice = $getPrice->json();
                                        // $BTCprice = $BTCprice['price'];
                                        // $BTCprice = $invoice->price / $BTCprice;

                                        $btcInfo = Http::withoutVerifying()->get('https://api.coingecko.com/api/v3/coins/bitcoin?market_data=true');
                                        $btcJSON = $btcInfo->json();
                                        $btcMarketUSD = $btcJSON['market_data']['current_price']['usd'];
                                        $btcMarketZAR = $btcJSON['market_data']['current_price']['zar'];

                                        $BTCquantity = $invoice->price / $btcMarketUSD;
                                        $BTCquantity = number_format($BTCquantity, 8, '.', '');
                                        $USD_ZAR_ratio = $btcMarketUSD / $btcMarketZAR;
                                        $btcZAR_price = $invoice->price / $USD_ZAR_ratio;
                                        $btcZAR_price = number_format($btcZAR_price, 2, '.', '');
                                        ?>

                                        <div class="form-group">
                                            <label for="">Invoice Total (USD)</label>
                                            <input id="usd_price" type="text" class="form-control" value="$ {{ $invoice->price }}" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Invoice Total (ZAR)</label>
                                            <input id="usd_price" type="text" class="form-control" value="R {{ $btcZAR_price }}" readonly>
                                        </div>

                                        <br>
                                        <div class="form-group">
                                            <label for=""><b>Invoice Total (BTC)</b></label>
                                            <input id="btc_price" type="text" style="background-color: #cff4fc;" class="form-control alert alert-info" value="{{ $BTCquantity }}" readonly>
                                        </div>
                
                                    </div>

                                    <div class="col-md-6">
                                        <div class="visible-print text-center">
                                            {{ QrCode::size(250)->generate( Auth::user()->bitcoin_address ) }}
                                         </div>
                                         {{-- <p class="text-center">{{ Auth::user()->bitcoin_address }}</p> --}}
                                         <div class="alert alert-info mx-auto text-center col-5 mt-3" role="alert">
                                             {{ Auth::user()->bitcoin_address }}
                                         </div>
                                    </div>

                                    <div class="mt-3 text-center">
                                            <a class="btn btn-secondary btn-lg" href="/request" role="button">Transaction History</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var status = <?php echo $status; ?>
            
            // Create socket variables
            if(status < 2 && status != -2){
                var addr =  document.getElementById("address").innerHTML;
                var wsuri2 = "wss://www.blockonomics.co/payment/"+ addr;
                // Create socket and monitor
                var socket = new WebSocket(wsuri2, "protocolOne")
                    socket.onmessage = function(event){
                        console.log(event.data);
                        response = JSON.parse(event.data);
                        //Refresh page if payment moved up one status
                        if (response.status > status)
                        setTimeout(function(){ window.location=window.location }, 1000);
                    }
            }

            // //Calculate BTC price
            // var usd_price = document.getElementById("usd_price").innerHTML;
            // // get btc price from blockonomics api
            // var xhr = new XMLHttpRequest();
            // xhr.open('GET', 'https://www.blockonomics.co/api/price?currency=USD', true);
            // xhr.onload = function() {
            //     if (this.status == 200) {
            //         var response = JSON.parse(this.responseText);
            //         var btc_price = response.price;
            //         var btc_price_usd = usd_price / btc_price;
            //         console.log(btc_price_usd);
            //         document.getElementById("btc_price").innerHTML = btc_price_usd.toFixed(2);
            //     }
            // };
        </script>

        {{-- <div class="mx-auto w-50 mt-5">
            <img src="{{ asset('img/invoice.jpg') }}" alt="">
        </div> --}}
    </div>

</div>

@endsection