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
            <li class="breadcrumb-item active" aria-current="page">Therapists</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Our Therapists</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <div class="row">
            
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="assets/custom/img/doctors/doc1.jpg" alt="">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Stein Albert</p>
                  <span class="text-sm text-grey">Psychologist</span> <br> <br>
                  <span style="font-style: italic;">"Through a collaborative and empathetic approach, I strive to create a safe and supportive therapeutic environment where you can explore your thoughts, emotions, and experiences"</span>
                </div> 
              </div>
            </div>
    
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="assets/custom/img/doctors/doc2.jpg" alt="">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Alexa Melvin</p>
                  <span class="text-sm text-grey">Psychiatrist</span><br> <br>
                  <span style="font-style: italic;">"My mission is to provide compassionate and comprehensive mental health care to individuals in need."</span>

                </div>
              </div>
            </div>
    
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="assets/custom/img/doctors/doc3.jpg">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Rebecca Steffany</p>
                  <span class="text-sm text-grey">Professinal Counselor</span> <br> <br>
                  <span style="font-style: italic;">"Together, we will work collaboratively to navigate challenges, foster resilience, and unlock the potential for personal transformation"</span>
                </div>
              </div>
            </div>
           
          </div>

        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form" method="POST" action="/make-appointment">
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="appointment_date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="departement" id="departement" class="custom-select">
              <option selected>select departement</option>
              <option value="cognitive">Cognitive Behavioral Therapy</option>
              <option value="existential">Existential Therapy</option>
              <option value="dialectical">Dialectical Behavior Therapy</option>
              <option value="anger ">Anger Management</option>
              <option value="psychodynamic">Psychodynamic Therapy</option>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp"  data-wow-delay="300ms">
            <input type="text" class="form-control" name="contact" placeholder="phone number">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" name="message" class="form-control" rows="6" placeholder="Enter message.."> 
            </textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div> <!-- .container -->
  </div> <!-- .page-section -->
  
 
  
    <div class="content-section wow zoomIn">
      <div class="specialty-section">
        <h2>Area of Specialty</h2>
        <p>Our therapists are specialized in these critical fields</p>
      </div>
  
      <div class="mental-illness-section">
        <h2>Common Mental Illnesses</h2>
        <ul>
          <li>Anxiety Disorders</li>
          <li>Depression</li>
          <li>Bipolar Disorder</li>
          <li>Schizophrenia</li>
          <li>Post-Traumatic Stress Disorder (PTSD)</li>
          <li>Eating Disorders</li>
          <li>Obsessive-Compulsive Disorder (OCD)</li>
          <li>Attention-Deficit/Hyperactivity Disorder (ADHD)</li>
        </ul>
      </div>
    </div>

  

  <div class="page-section banner-home bg-image">
    <div class="container py-5 py-lg-0">
      <div class="row align-items-center">
        
        <div class="col-lg-8 wow fadeInRight">
          <h1 class="font-weight-normal mb-3">Get easy access of all features using MindfulJourney app</h1>
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