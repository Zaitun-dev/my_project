<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Therapy</title>
    <link rel="stylesheet" href="{{asset("assets/custom/css/maicons.css")}}">
    <link rel="stylesheet" href="{{asset("assets/custom/css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("assets/custom/vendor/owl-carousel/css/owl.carousel.css")}}">
    <link rel="stylesheet" href="{{asset("assets/custom/vendor/animate/animate.css")}}">
    <link rel="stylesheet" href="{{asset("assets/custom/css/theme.css")}}">
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
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">About Us</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  
  <div class="page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 wow fadeInUp">
          <h1 class="text-center mb-3" style="font-style: italic;">Welcome to MindfulJourney!</h1>
          <div class="text-lg">
            <p>Life can become overwhelming when you believe you've exhausted all the conceivable approaches to improve it. 
              As the burden intensifies and burnout persists, your life may begin to unravel. However, it doesn't have to be this challenging. 
              MindfulJourney is here to accompany you on this transformative path, helping to lighten the load and make the journey smoother.
            </p>
            <p> MindfulJourney emphasizes the importance of self-care and promotes holistic approaches to mental health. It encourages users 
              to embark on a mindful journey of self-discovery, empowering them to make positive changes in their lives and develop resilience in the face of adversity.
              We are a team of highly skilled Clinical and Counselling Psychologists and Psychotherapists and our focus is on providing highly effective evidence-based
               therapies which have been individually tailored to suit your needs.
            </p>
          </div>
        </div>
        <div class="col-lg-10 mt-5">
          <h1 class="text-center mb-5 wow fadeInUp" style="font-style: italic;">The Team</h1>
          <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="{{asset("assets/custom/img/doctors/doc1.jpg")}}" alt="image of a doctor">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Stein Albert</p>
                  <span class="text-sm text-grey">Psychologist</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="{{asset("assets/custom/img/doctors/doc2.jpg")}}" alt="image of a doctor">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Alexa Melvin</p>
                  <span class="text-sm text-grey">Psychiatrist</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="{{asset("assets/custom/img/doctors/doc3.jpg")}}" alt="image of a doctor">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Rebecca Steffany</p>
                  <span class="text-sm text-grey">Professinal Counselor</span>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>


  
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