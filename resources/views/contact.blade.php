<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Therapy</title>
    <link rel="stylesheet" href="{{asset('assets/custom/css/maicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/custom/css/maison.css')}}">
    <link rel="stylesheet" href="{{asset('assets/custom/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/custom/vendor/owl-carousel/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/custom/vendor/animate/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/custom/css/theme.css')}}">
</head>
<body>

     <!-- Back to top button -->
  <div class="back-to-top"></div>
   
  <header>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">MindfulJourney</span></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/therapist">Therapists</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="/blog">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>
            </li>
            @if (Route::has('login'))
            @auth
                <li class="nav-item">
                  <a class="btn btn-warning ml-lg-3" href="{{ url('/dashboard') }}">
                    Dashboard
                  </a>
                </li>
            @else
                  <li class="nav-item">
                    <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">
                      Log in
                    </a>
                  </li>
                @if (Route::has('register'))
                   <li class="nav-item">
                      <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">
                        Register
                      </a>
                   </li>
                @endif
            @endauth
    @endif
             {{-- @auth
              <li class="nav-item">
                    <a class="btn btn-warning ml-lg-3" href="/logout">
                        Log out
                    </a>
              </li>
            @else
              <li class="nav-item">
                  <a class="btn btn-primary ml-lg-3" href="/login">
                      Login
                  </a>
              </li>
            @endauth --}}
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-banner overlay-dark bg-image">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Contact</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->
  
  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Get in Touch</h1>

      <form class="contact-form mt-5" method="POST" action="/get-in-touch">
        @csrf
        <div class="row mb-3">
          <div class="col-sm-6 py-2 wow fadeInLeft">
            <label for="fullName">Name</label>
            <input type="text" id="fullName" name="name" class="form-control" placeholder="Full name..">
          </div>
          <div class="col-sm-6 py-2 wow fadeInRight">
            <label for="emailAddress">Email</label>
            <input type="text" id="emailAddress" name="email" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" class="form-control" placeholder="Enter subject..">
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="message">Message</label>
            <textarea id="message" class="form-control" name="message" rows="8" placeholder="Enter Message.."></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary wow zoomIn">Send Message</button>
      </form>
    </div>
  </div>
  
  <div class="maps-container wow fadeInUp">
    <div id="google-maps">
       <iframe 
       src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3306.459554658997!2d-4.
       99698092439757!3d34.032080973164724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!
       1s0xd9f8b46cb7f0f71%3A0xd961561fda2a1cd!2sCash%20Plus%20Atlas%20Fes!5e0!3m2!1sen!2sma
       !4v1687508210233!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>

  <div class="page-section banner-home bg-image">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        <div class="col-lg-4 wow zoomIn">
        </div>
        <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3">Get easy access of all features using MindfulJourney App</h1>
          <a href="#"><img src="assets/custom/img/google_play.svg" alt=""></a>
          <a href="#" class="ml-2"><img src="assets/custom/img/app_store.svg" alt=""></a>
        </div>
      </div>
    </div>
  </div> <!-- .banner-home -->

  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">Editorial Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Join as Therapists</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="#">One-Fitness</a></li>
            <li><a href="#">One-Drugs</a></li>
            <li><a href="#">One-Live</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
          <a href="#" class="footer-link">701-573-7582</a>
          <a href="#" class="footer-link">healthcare@temporary.net</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All right reserved</p>
    </div>
  </footer>

  <script src="{{asset("assets/custom/js/jquery-3.5.1.min.js")}}"></script>
    <script src="{{asset("assets/custom/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("assets/custom/vendor/owl-carousel/js/owl.carousel.min.js")}}"></script>
    <script src="{{asset("assets/custom/vendor/wow/wow.min.js")}}"></script>
<script src="{{asset("assets/custom/js/theme.js")}}"></script>     
</body>
</html>