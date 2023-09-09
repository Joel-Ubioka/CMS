<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <title>Morrhtech Solutions</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free HTML Templates" name="keywords">
  <meta content="Free HTML Templates" name="description">

  <!-- Favicon -->
  <link href="{{asset('img/favicon.ico')}}" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
    rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
  <link href="{{asset('lib/lightbox/css/lightbox.min.css" rel="stylesheet')}}">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
  <!-- Topbar Start -->
  <div class="container-fluid px-5 d-none d-lg-block">
    <div class="row gx-5">
      <div class="col-lg-4 text-center py-3">
        <div class="d-inline-flex align-items-center">
          <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
          <div class="text-start">
            <h6 class="text-uppercase fw-bold">Our Office</h6>
            <span>123 Street, New York, USA</span>
          </div>
        </div>
      </div>
      <div class="col-lg-4 text-center border-start border-end py-3">
        <div class="d-inline-flex align-items-center">
          <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
          <div class="text-start">
            <h6 class="text-uppercase fw-bold">Email Us</h6>
            <span>info@example.com</span>
          </div>
        </div>
      </div>
      <div class="col-lg-4 text-center py-3">
        <div class="d-inline-flex align-items-center">
          <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
          <div class="text-start">
            <h6 class="text-uppercase fw-bold">Call Us</h6>
            <span>+012 345 6789</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Topbar End -->


  <!-- Navbar Start -->
  <div class="container-fluid sticky-top bg-dark bg-light-radial shadow-sm px-5 pe-lg-0">
    <nav class="navbar navbar-expand-lg bg-dark bg-light-radial navbar-dark py-3 py-lg-0">
      <a href="/" class="navbar-brand">
        <h1 class="m-0 display-4 text-uppercase text-white"><i class="bi bi-building text-primary me-2"></i>WEBUILD</h1>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
          <a href="./" class="nav-item nav-link active">Home</a>
          <a href="./about" class="nav-item nav-link">About</a>
          <a href="./service" class="nav-item nav-link">Service</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
            <div class="dropdown-menu m-0">
              <a href="./project" class="dropdown-item">Our Project</a>
              <a href="./team" class="dropdown-item">The Team</a>
              <a href="./testimonial" class="dropdown-item">Testimonial</a>
              <a href="./blog" class="dropdown-item">Blog Grid</a>
              <a href="./detail" class="dropdown-item">Blog Detail</a>
            </div>
          </div>
          <a href="./contact" class="nav-item nav-link">Contact</a>
          <!-- <a href="./register" class="nav-item nav-link">SIGN UP</a>
          <a href="./login" class="nav-item nav-link">LOGIN</a> -->
          <a href="/register" class="nav-item nav-link bg-primary text-white px-5 ms-3 d-none d-lg-block">Get A Quote <i
              class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </nav>
  </div>
  <!-- Navbar End -->

  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav me-auto">

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
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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
  </nav>
  <br><br>

  <div class="container">
    @if(session()->has('success'))
    <div class="alert alert-success">
      {{ session()->get('success')}}
    </div>
    @endif
  </div>



  @yield('content')
  <br><br>

  <!-- Footer Start -->
  <div class="footer container-fluid position-relative bg-dark bg-light-radial text-white-50 py-6 px-5">
    <div class="row g-5">
      <div class="col-lg-6 pe-lg-5">
        <a href="index.html" class="navbar-brand">
          <h1 class="m-0 display-4 text-uppercase text-white"><i class="bi bi-building text-primary me-2"></i>WEBUILD
          </h1>
        </a>
        <p>Aliquyam sed elitr elitr erat sed diam ipsum eirmod eos lorem nonumy. Tempor sea ipsum diam sed clita dolore
          eos dolores magna erat dolore sed stet justo et dolor.</p>
        <p><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</p>
        <p><i class="fa fa-phone-alt me-2"></i>+012 345 67890</p>
        <p><i class="fa fa-envelope me-2"></i>info@example.com</p>
        <div class="d-flex justify-content-start mt-4">
          <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i class="fab fa-twitter"></i></a>
          <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
          <a class="btn btn-lg btn-primary btn-lg-square rounded-0" href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="col-lg-6 ps-lg-5">
        <div class="row g-5">
          <div class="col-sm-6">
            <h4 class="text-white text-uppercase mb-4">Quick Links</h4>
            <div class="d-flex flex-column justify-content-start">
              <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Home</a>
              <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>About Us</a>
              <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Our Services</a>
              <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Meet The Team</a>
              <a class="text-white-50" href="#"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
            </div>
          </div>
          <div class="col-sm-6">
            <h4 class="text-white text-uppercase mb-4">Popular Links</h4>
            <div class="d-flex flex-column justify-content-start">
              <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Home</a>
              <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>About Us</a>
              <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Our Services</a>
              <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Meet The Team</a>
              <a class="text-white-50" href="#"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
            </div>
          </div>
          <div class="col-sm-12">
            <h4 class="text-white text-uppercase mb-4">Newsletter</h4>
            <div class="w-100">
              <div class="input-group">
                <input type="text" class="form-control border-light" style="padding: 20px 30px;"
                  placeholder="Your Email Address"><button class="btn btn-primary px-4">Sign Up</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-dark bg-light-radial text-white border-top border-primary px-0">
    <div class="d-flex flex-column flex-md-row justify-content-between">
      <div class="py-4 px-5 text-center text-md-start">
        <p class="mb-0">&copy; <a class="text-primary" href="#">Your Site Name</a>. All Rights Reserved.</p>
      </div>
      <div class="py-4 px-5 bg-primary footer-shape position-relative text-center text-md-end">
        <p class="mb-0">Designed by <a class="text-dark" href="https://htmlcodex.com">HTML Codex</a></p>
      </div>
    </div>
  </div>
  <!-- Footer End -->


  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous">
  <script src="{{asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('lib/tempusdominus/js/moment.min.js')}}"></script>
  <script src="{{asset('lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
  <script src="{{asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>

  @yield('scripts')

  <!-- Template Javascript -->
  <script src="{{asset('js/main.js')}}"></script>
</body>

</html>