<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/aos/aos.css/')}}" rel="stylesheet">
<link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

<!-- Variables CSS Files. Uncomment your preferred color scheme -->
<link href="{{ asset('assets/css/variables.css') }}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">


<header id="header" class="header fixed-top" data-scrollto-offset="0">
  <div class="container-fluid d-flex align-items-center justify-content-between">

    <a href="{{ route('home') }}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1>OurChat<span>.</span></h1>
    </a>

    <nav id="navbar" class="navbar">
      <ul>

        <li><a class="nav-link scrollto" href="index.html#about">About</a></li>
        <li><a class="nav-link scrollto" href="index.html#services">Services</a></li>
        <li><a class="nav-link scrollto" href="{{ route('chat') }}">Chat</a></li>
        <li><a class="nav-link scrollto" href="index.html#team">Team</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle d-none"></i>
    </nav><!-- .navbar -->
    @auth
    <a class="btn btn-danger scrollto font-weight-bold" href="{{ route('logout') }}">Logout</a>
    @endauth
    @guest
    <a class="btn-getstarted scrollto" href="{{ route('login-index') }}">Login</a>
    @endguest


  </div>
</header><!-- End Header -->

<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

<div class="container">
  @yield('content')
</div>