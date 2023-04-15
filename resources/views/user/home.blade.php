<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Assets Management System</title>
  
  <link rel="icon" type="image/x-icon" href="../assets/img/logo.jpg">
  <link rel="stylesheet" href="../assets/css/maicons.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="../assets/css/theme.css">

  <script src="../assets/js/jquery-3.5.1.min.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
  <script src="../assets/vendor/wow/wow.min.js"></script>
  <script src="../assets/js/theme.js"></script>

</head>
<body style="background-color:skyblue">

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
     <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="/home">
        <img src="../assets/img/logo.JPG" alt="logo" style="width:30px;"> 
            <span class="navbar-brand-full">AMS</span>
        </a>
        <form action="#">
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Leaders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Contact</a>
            </li>

            @if(Route::has('login'))
            @auth
            <div>
            <x-app-layout>	
			</x-app-layout>
			</div>
            @else
            <li class="nav-item">
              <a class="btn btn-success ml-lg-3" href="{{ route('login') }}">Login </a>
            </li>
            <!-- li class="nav-item">
              <a class="btn btn-danger ml-lg-3" href="{{ route('register') }}">Register</a>
            </li-->
            @endauth
            @endif
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/river11.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">Unity is strength</span>
        <h1 class="display-4">ASSETS MANAGEMENT SYSTEM</h1>
        <a href="#" class="btn btn-success">Okavango</a>
      </div>
    </div>
  </div>


 <!-- .page-section -->

  </div> <!-- .bg-light -->
@include('user.employees');
 <!-- .page-section -->

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <a href="#" class="footer-link"> Call: +267 723 582 02 </a>  
          <a href="#" class="footer-link"> Email: bothodolly@gmail.com</a>  
        </div>
      </div>

      <hr/>
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">© Botho Neo 2023</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> UB(201802659) <a href="#" target="_blank">Assets Management System</a> AMS</span>
            </div>
    </div>
  </footer>  
</body>
</html>