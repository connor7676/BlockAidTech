<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <img src="{{ asset('logo/BlockAid-logos_blackcircle.png') }}" alt="">
        <span>BlockAid</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a></li>
          <li><a class="nav-link scrollto" href="/payment">Payment</a></li>
          <li><a class="nav-link {{ Request::is('/watchlist') ? 'active' : '' }}" href="/watchlist">Watchlist</a></li>
          <li><a class="nav-link {{ Request::is('/benefits') ? 'active' : '' }}" href="/benefits">Benefits</a></li>
          <li><a class="nav-link {{ Request::is('/process') ? 'active' : '' }}" href="/process">Process</a></li>
          <li><a class="nav-link {{ Request::is('/team') ? 'active' : '' }}" href="/team">About Us</a></li>

          <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                @endif

                @if (Route::has('register'))
                    <li><a class="getstarted" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @endif
            @else
                <li>
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
                <li><a class="getstarted" href="/dashboard">{{ Auth::user()->name }}</a></li>
            @endguest
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->


{{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
  <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
          {{ config('app.name', 'Blockaid') }}
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav me-auto">
              <li class="nav-item">
                  <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/payments">Payments</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/benefits">Benefits</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="/posts">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/posts/create">Create Product</a>
            </li>
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ms-auto">
              <!-- Authentication Links -->
              @guest
                  @if (Route::has('login'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                  @endif

                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                      </a>

                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="/dashboard">Dashboard</a>

                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
      </div>
  </div>
</nav> --}}
