@extends('layouts.app')

@section('content')
<?php use SimpleSoftwareIO\QrCode\Facades\QrCode; ?>
<br>
<br>
<br>
<div class="container py-5">

    <div class="row justify-content-center pb-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <br>
                    <br>
                    {{-- account details --}}
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Account Details</h3>
                            <ul>
                                <li>Name: {{ Auth::user()->name }}</li>
                                <li>Email: {{ Auth::user()->email }}</li>
                                <li>Created At: {{ Auth::user()->created_at }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Wallet Address</div>

                <div class="card-body">
                    @if (!is_null(Auth::user()->bitcoin_address))
                        <div class="visible-print text-center">
                           {{ QrCode::size(250)->generate( Auth::user()->bitcoin_address ) }}
                        </div>
                        {{-- <p class="text-center">{{ Auth::user()->bitcoin_address }}</p> --}}
                        <div class="alert alert-info mx-auto text-center col-5 mt-3" role="alert">
                            {{ Auth::user()->bitcoin_address }}
                        </div>


                        <div class="form-group py-4">
                            <form action="/dashboard/edit" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="bitcoin_address" class="col-md-4 col-form-label text-md-end">{{ __('Bitcoin Address') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="bitcoin_address" type="bitcoin_address" class="form-control @error('bitcoin_address') is-invalid @enderror" name="bitcoin_address" value="{{ old('bitcoin_address') }}" required autofocus>
        
                                        @error('bitcoin_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-4 offset-md-4">
                                        {{-- <button type="submit" class="btn btn-primary">
                                            {{ __('Edit') }}
                                        </button> --}}
                                        <button class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</button>
                                        <a href="/dashboard/delete" class="btn btn-danger btn-lg active">Delete</a>
                                    </div>
                                </div>

                                @if(session('success'))
                                    <div class="alert alert-success mt-3">
                                        {{session('success')}}
                                    </div>
                                @endif

                            </form>
                        </div>

                    @else
                        <div class="alert alert-info mx-auto text-center col-5" role="alert">
                            {{ __('You have not added a wallet yet.') }}
                        </div>

                        <div class="form-group py-4">
                            <form action="{{ url('/dashboard/edit') }}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label for="bitcoin_address" class="col-md-4 col-form-label text-md-end">{{ __('Bitcoin Address') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="bitcoin_address" type="bitcoin_address" class="form-control @error('bitcoin_address') is-invalid @enderror" name="bitcoin_address" value="{{ old('bitcoin_address') }}" required autofocus>
        
                                        @error('bitcoin_address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Add') }}
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>

                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="panel-body">
        <a href="/posts/create" class="btn btn-primary">Create Posts</a>
        <h3>Your Blog Posts</h3>
        @if(count($posts) > 0)
            <table class="table table-striped">
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                    </tr>
                @endforeach
            </table>
        @else
            <p>You have no posts</p>
        @endif
    </div> --}}
</div>
@endsection
