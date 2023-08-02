<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Therapy</title>
    <link rel="stylesheet" href="{{asset("assets/custom/css/maisons.css")}}">
    <link rel="stylesheet" href="{{asset("assets/custom/css/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("assets/custom/vendor/owl-carousel/css/owl.carousel.css")}}">
    <link rel="stylesheet" href="{{asset("assets/custom/vendor/animate/animate.css")}}">
    <link rel="stylesheet" href="{{asset("assets/custom/css/theme.css")}}">
</head>
<body>
       
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
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
              </ol>
            </nav>
            <h1 class="font-weight-normal">Blog</h1>
          </div> <!-- .container -->
        </div> <!-- .banner-section -->
    </div> <!-- .page-banner -->

    <div class="page-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-sm-6 py-3">
                  <div class="card-blog">
                    <div class="header">
                      <div class="post-category">
                      </div>
                      <a href="/blog-detail" class="post-thumb">
                        <img src="{{asset("assets/custom/img/image2.jpg")}}" alt="image">
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
    
                <div class="col-sm-6 py-3">
                  <div class="card-blog">
                    <div class="header">
                      <div class="post-category">
                        <a href="Anxiety"></a>
                      </div>
                      <a href="/blog-detail" class="post-thumb">
                        <img src="{{asset("assets/custom/img/image3.jpg")}}" alt="image">
                      </a>
                    </div>
                    <div class="body">
                      <h5 class="post-title"><a href="/blog-detail">Depression!</a></h5>
                      <div class="site-info">
                        
                        <span class="mai-time"></span> 2 weeks ago
                      </div>
                    </div>
                  </div>
                </div>
    
                <div class="col-sm-6 py-3">
                  <div class="card-blog">
                    <div class="header">
                      <div class="post-category">
                        <a href="Depression"></a>
                      </div>
                      <a href="/blog-detail" class="post-thumb">
                        <img src="{{asset("assets/custom/img/blog/blog3.jpg")}}" alt="">
                      </a>
                    </div>
                    <div class="body">
                      <h5 class="post-title"><a href="/blog-detail">Why you feel the way you feel</a></h5>
                      <div class="site-info">
                        <span class="mai-time"></span> 4 weeks ago
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 py-3">
                  <div class="card-blog">
                    <div class="header">
                      <div class="post-category">
                      <a href="#"></a>
                      </div>
                      <a href="/blog-detail" class="post-thumb">
                        <img src="{{asset("assets/custom/img/blog/blog4.jpg")}}" alt="image">
                      </a>
                    </div>
                    <div class="body">
                      <h5 class="post-title"><a href="/blog-detail">How does working out affect our mental health?</a></h5>
                      <div class="site-info">
                        <span class="mai-time"></span> 4 weeks ago
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- .row -->
            </div>
            <div class="col-lg-4">
              <div class="sidebar">
                <div class="sidebar-block">
                  <h3 class="sidebar-title">Search</h3>
                  <form action="#" class="search-form">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                      <button type="submit" class="btn"><span class="icon mai-search"></span></button>
                    </div>
                  </form>
                </div>
    
                <div class="sidebar-block">
                  <h3 class="sidebar-title">Recent Blog</h3>
                  <div class="blog-item">
                    <a class="post-thumb" href="">
                      <img src="{{asset("assets/custom/img/blog/blog4.jpg")}}" alt="image">
                    </a>
                    <div class="content">
                      <h5 class="post-title"><a href="#">How does working out affect our mental health?</a></h5>
                      <div class="meta">
                        <a href="#"><span class="mai-calendar"></span> July 12, 2023</a>
                        <a href="#"><span class="mai-person"></span> Admin</a>
                        <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                      </div>
                    </div>
                  </div>
                  <div class="blog-item">
                    <a class="post-thumb" href="">
                      <img src="{{asset("assets/custom/img/image2.jpg")}}" alt="image">
                    </a>
                    <div class="content">
                      <h5 class="post-title"><a href="#">Why you feel the way you feel</a></h5>
                      <div class="meta">
                        <a href="#"><span class="mai-calendar"></span> July 12, 2023</a>
                        <a href="#"><span class="mai-person"></span> Admin</a>
                        <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                      </div>
                    </div>
                  </div>
    
                  <div class="blog-item">
                    <a class="post-thumb" href="">
                      <img src="{{asset("assets/custom/img/image3.jpg")}}" alt="">
                    </a>
                    <div class="content">
                      <h5 class="post-title"><a href="#">ADHD</a></h5>
                      <div class="meta">
                        <a href="#"><span class="mai-calendar"></span> July 12, 2023</a>
                        <a href="#"><span class="mai-person"></span> Admin</a>
                        <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                      </div>
                    </div>
                  </div>
              
              
                <div class="sidebar-block">
                  <h3 class="sidebar-title">Quote of the day!</h3>
                  <p style="font-family: sans-serif; font-weight: bold;">Just because no one else can heal or do your inner work for you doesnt mean you can, 
                    should or do it alone!
                  </p>
                </div>
              </div>
            </div> 
          </div> <!-- .row -->
        </div> <!-- .container -->
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
  
 
    <script src="{{asset("assets/custom/js/jquery-3.5.1.min.js")}}"></script>
    <script src="{{asset("assets/custom/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("assets/custom/vendor/owl-carousel/js/owl.carousel.min.js")}}"></script>
    <script src="{{asset("assets/custom/vendor/wow/wow.min.js")}}"></script>
    <script src="{{asset("assets/custom/js/theme.js")}}"></script>  
  </body>
  </html>