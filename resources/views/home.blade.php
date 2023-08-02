<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Therapy</title>
    <link rel="stylesheet" href="{{asset('assets/custom/css/maisons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/custom/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/custom/vendor/owl-carousel/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/custom/css/maicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/custom/css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/custom/vendor/animate/animate.css')}}">
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

  <div class="page-hero bg-image overlay-dark">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">A Life Worth Living For</span>
        <h1 class="display-4">Be gentle with yourself, you are allowed to struggle</h1>
        <a href="/therapist" class="btn btn-primary">Talk To Someone</a>
      </div>
    </div>
  </div>

  <div class="page-section pb-0">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 py-3 wow fadeInUp">
          <h1 style="font-style: italic;">Welcome! <br> <br> We are here to help</h1>
            <p class="text-grey mb-4">Our website is designed to be your trusted companion on your journey to emotional well-being and personal growth.
              At MindfylJourney, we understand that life can be challenging, and we believe that everyone deserves the opportunity to lead a fulfilling 
              and meaningful life. We are dedicated to providing a safe and supportive environment where you can explore your thoughts, feelings, and experiences 
              with a compassionate and skilled therapists.
            </p>
          <a href="about.html" class="btn btn-primary">Learn More</a>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
          <div class="img-place custom-img-1">
            <img src="{{asset('assets/custom/img/image3.jpg')}}" alt="image.jpg">
          </div>
        </div>
      </div>
    </div>
  </div> <!-- .bg-light -->

  <div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Latest Blogs</h1>
      <div class="row mt-5">
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
            
              <a href="/blog-detail" class="post-thumb">
                <img src="{{asset('assets/custom/img/image5.jpeg')}}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="/blog-detail">Ways to deal with Anxiety</a></h5>
              <div class="site-info">
                <span class="mai-time"></span> 1 week ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="/blog-detail" class="post-thumb">
                <img src="{{asset('assets/custom/img/image2.jpg')}}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="/blog-detail">Depression</a></h5>
              <div class="site-info">
                <span class="mai-time"></span> 4 weeks ago
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="/blog-detail" class="post-thumb">
                <img src="{{asset('assets/custom/img/image4.jpg')}}" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="/blog-detail">What is ADHD</a></h5>
              <div class="site-info">
                <span class="mai-time"></span> 2 months ago
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="/blog" class="btn btn-primary">Read More</a>
        </div>

      </div>
    </div>
  </div> <!-- .page-section -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="departement" id="departement" class="custom-select">
              <option value="cognitive">Cognitive Behavioral Therapy</option>
              <option value="existential">Existential Therapy </option>
              <option value="dialectical">Dialectical Behavior Therapy</option>
              <option value="anger">Anger Management</option>
              <option value="psychodynamic">Psychodynamic Therapy</option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control" placeholder="Number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
  </div> <!-- .page-section -->

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

<script src="{{asset('assets/custom/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assets/custom/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/custom/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/custom/vendor/wow/wow.min.js')}}"></script>
<script src="{{asset('assets/custom/js/theme.js')}}"></script>    
</body>
</html>