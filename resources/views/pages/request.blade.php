@extends('layouts.app')

@section('content')

<br>
<br>
<br>

<div class="py-5">

    <div class="container">
        <div class="mx-auto w-75">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-request-tab" data-bs-toggle="tab" data-bs-target="#nav-request" type="button" role="tab" aria-controls="nav-request" aria-selected="true">Request</button>
                  <button class="nav-link" id="nav-history-tab" data-bs-toggle="tab" data-bs-target="#nav-history" type="button" role="tab" aria-controls="nav-history" aria-selected="false">History</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-request" role="tabpanel" aria-labelledby="nav-request-tab">
                    <div class="card mx-auto w-75 mt-5">
                        <div class="card-body">
                            <form method="POST" action="request">
                                @csrf

                                <div class="row mb-3">
                                    <label for="requestName" class="col-md-4 col-form-label text-md-end">{{ __("Receiver's Name") }}</label>
        
                                    <div class="col-md-6">
                                        <input id="requestName" type="text" class="form-control @error('requestName') is-invalid @enderror" name="requestName" value="{{ old('requestName') }}" required autocomplete="requestName" autofocus>
        
                                        @error('requestName')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __("Receiver's Email") }}</label>
        
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="row mb-3">
                                    <label for="requestAmount" class="col-md-4 col-form-label text-md-end">{{ __('Amount (USD)') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="requestAmount" type="text" class="form-control @error('requestAmount') is-invalid @enderror" name="requestAmount" required autocomplete="requestAmount">
        
                                        @error('requestAmount')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="requestAmountZAR" class="col-md-4 col-form-label text-md-end">{{ __('Amount (ZAR)') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="requestAmountZAR" type="text" class="form-control @error('requestAmount') is-invalid @enderror" name="requestAmount" autocomplete="requestAmount" disabled>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="requestAmountBTC" class="col-md-4 col-form-label text-md-end">{{ __('Amount (BTC)') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="requestAmountBTC" type="text" class="form-control @error('requestAmount') is-invalid @enderror" name="requestAmount" autocomplete="requestAmount" disabled>
                                    </div>
                                </div>
        
                                <div class="row mb-3">
                                    <label for="note" class="col-md-4 col-form-label text-md-end">{{ __('Note (Optional)') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="note" type="text" class="form-control" name="note">
                                    </div>
                                </div>
        
                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Submit') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-history" role="tabpanel" aria-labelledby="nav-history-tab">
                    
                    <table class="table table-striped mx-auto w-75 mt-5">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Invoice Code</th>
                            <th scope="col">Bitcoin Address</th>
                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invoices as $invoice)
                                <?php
                                    if ($invoice->status == 0) {
                                        $status = "Pending";
                                    } elseif ($invoice->status == 1) {
                                        $status = "Paid";
                                    } elseif ($invoice->status == 2) {
                                        $status = "Cancelled";
                                    }
                                ?>
                                <tr>
                                    <th scope="row">{{ $invoice->id }}</th>
                                    <td>{{ $invoice->code }}</td>
                                    <td>{{ $invoice->address }}</td>
                                    <td>$ {{ $invoice->price }}</td>
                                    <td>{{ $status }}</td>
                                    <td><a href="invoice/{{ $invoice->id }}" class="btn btn-secondary" role="button" aria-disabled="true">View Invoice</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                        
                </div>
            </div>
        </div>
    </div>

    <?php
        $btcInfo = Http::withoutVerifying()->get('https://api.coingecko.com/api/v3/coins/bitcoin?market_data=true');
        $btcJSON = $btcInfo->json();
        $btcMarketUSD = $btcJSON['market_data']['current_price']['usd'];
        $btcMarketZAR = $btcJSON['market_data']['current_price']['zar'];

        $USD_ZAR_ratio = $btcMarketUSD / $btcMarketZAR;
    ?>
    
    <script>
        document.getElementById("requestAmount").oninput = function() {
            zarValue = this.value / {{ $USD_ZAR_ratio }};
            btcValue = this.value / {{ $btcMarketUSD }};
            // set zar value to locale with 2 decimals
            document.getElementById("requestAmountZAR").value = zarValue.toLocaleString('en-US', {minimumFractionDigits: 2, maximumFractionDigits: 2});
            // set btc value to locale with 8 decimals
            document.getElementById("requestAmountBTC").value = btcValue.toLocaleString('en-US', {minimumFractionDigits: 8, maximumFractionDigits: 8});
        };
    </script>
</div>

@endsection