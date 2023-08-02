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

  <div class="page-section pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <nav aria-label="Breadcrumb">
            <ol class="breadcrumb bg-transparent py-0 mb-5">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/blog">Blog</a></li>
              <li class="breadcrumb-item active" aria-current="page">Ways to deal with Anxiety</li>
            </ol>
          </nav>
        </div>
      </div> <!-- .row -->

      <div class="row">
        <div class="col-lg-8">
          <article class="blog-details">
            <div class="post-thumb">
              <img src="{{asset("assets/custom/img/blog/blog_1.jpg")}}" alt="">
            </div>
            <div class="post-meta">
              <div class="post-author">
                <span class="text-grey">By</span> <a href="#">Admin</a>  
              </div>
              <span class="divider">|</span>
              <div class="post-date">
                <a href="#">22 Jan, 2023</a>
              </div>
              <span class="divider">|</span>
              <div>
                <a href="#">ADHD</a>, <a href="#">Anxiety</a>, <a href="#">Depression</a>  
              </div>
              <span class="divider">Ways to deal with Anxiety|</span>
              <div class="post-comment-count">
                <a href="#">8 Comments</a>
              </div>
            </div>
            <h2 class="post-title h1">Ways to deal with Anxiety </h2>
            <div class="post-content">
              <p>As humans, our bodies undergo various changes, and we all experience a multitude of challenges in this world.
                 Often, these experiences can feel suffocating, leaving us with two options: either endure them or actively seek solutions.
                  It is important to recognize that feeling anxiety is a common occurrence, and the path to feeling better often involves
                   seeking professional help. Anxiety can stem from various factors such as current life circumstances, childhood traumas, 
                   severe physical and mental health issues, as well as drug or medication use. Coping with anxiety can be a formidable task,
                 but there are numerous effective strategies available to manage and reduce anxiety levels. Here are some approaches to dealing with anxiety:
                </p>
              <p><ul>
                <li>
                  Prioritize self-care: Take care of your physical and emotional well-being. Make sure you are getting enough sleep, eating a balanced diet,
                   and engaging in activities that bring you joy and relaxation. Practice self-compassion and allow yourself to take breaks when needed.
                </li>
                <li>
                  Practice deep breathing: Deep breathing exercises can help calm your nervous system and promote relaxation. Take slow, deep breaths, 
                  focusing on your breath as you inhale and exhale. This can help alleviate immediate feelings of anxiety.
                </li>
                <li>
                  Engage in regular physical exercise: Physical activity releases endorphins, which are natural mood enhancers.
                   Regular exercise can reduce anxiety levels and improve overall well-being. Find activities you enjoy, such as walking,
                   jogging, yoga, or dancing, and incorporate them into your routine.
                </li>
                <li>
                  Practice mindfulness and meditation: Mindfulness techniques and meditation can help you stay present in the moment and reduce anxious thoughts.
                   Set aside time each day to engage in mindfulness practices, such as mindful breathing, body scans, or guided meditation.
                    These practices can help you develop a greater sense of calm and awareness.
                </li>
                <li>
                  Challenge negative thoughts: Anxiety often involves negative thought patterns and catastrophic thinking. Challenge these thoughts by questioning 
                  their validity and replacing them with more realistic and positive alternatives. Cognitive-behavioral therapy (CBT) techniques can be particularly 
                  helpful in identifying and reframing negative thinking patterns.
                </li>
                <li>
                  Seek support: Reach out to friends, family, or a trusted support network. Talking about your anxiety with someone you trust can provide 
                  comfort and help you feel less alone. Consider joining support groups or seeking professional help from a therapist who specializes in anxiety disorders.
                </li>
              </ul>
              </p>
              <p>Remember, everyone's experience with anxiety is unique, and what works for one person may not work for another. 
                It's essential to explore different strategies and find a combination that best suits you. If your anxiety persists or significantly
                 interferes with your daily life, consider seeking professional help from a mental health professional.
                </p>
            </div>
            <div class="post-tags">
              <a href="#" class="tag-link">Anxiety</a>
              <a href="#" class="tag-link">Depression</a>
              <a href="#" class="tag-link">ADHD</a>
            </div>
          </article> <!-- .blog-details -->

          <div class="comment-form-wrap pt-5">
            <h3 class="mb-5">Leave a comment</h3>
            <form action="#" class="">
              <div class="form-row form-group">
                <div class="col-md-6">
                  <label for="name">Name *</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="col-md-6">
                  <label for="email">Email *</label>
                  <input type="email" class="form-control" id="email">
                </div>
              </div>
              <div class="form-group">
                <label for="website">Website</label>
                <input type="url" class="form-control" id="website">
              </div>
  
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="msg" id="message" cols="30" rows="8" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Post Comment" class="btn btn-primary">
              </div>
  
            </form>
          </div>
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
              <h3 class="sidebar-title">Categories</h3>
              <ul class="categories">
                <li><a href="#">Anxiety <span>12</span></a></li>
                <li><a href="#">ADHD <span>22</span></a></li>
                <li><a href="#">Depression <span>37</span></a></li>  
              </ul>
            </div>

            <div class="sidebar-block">
              <h3 class="sidebar-title">Recent Blog</h3>
              <div class="blog-item">
                <a class="post-thumb" href="">
                  <img src="{{asset("assets/custom/img/image2.jpg")}}" alt="">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="#">What is ADHD</a></h5>
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
                  <h5 class="post-title"><a href="#">Depression</a></h5>
                  <div class="meta">
                    <a href="#"><span class="mai-calendar"></span> July 12, 2013</a>
                    <a href="#"><span class="mai-person"></span> Admin</a>
                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                  </div>
                </div>
              </div>
              <div class="blog-item">
                <a class="post-thumb" href="">
                  <img src="{{asset("assets/custom/img/image4.jpg")}}" alt="">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="#">Bipolar Disorder</a></h5>
                  <div class="meta">
                    <a href="#"><span class="mai-calendar"></span>July 12, 2018</a>
                    <a href="#"><span class="mai-person"></span>Admin</a>
                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar-block">
              <h3 class="sidebar-title">Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">mental health</a>
                <a href="#" class="tag-cloud-link">anxiety</a>
                <a href="#" class="tag-cloud-link">bipolar</a>
                <a href="#" class="tag-cloud-link">ADHD</a>
                <a href="#" class="tag-cloud-link">chronic</a>
                <a href="#" class="tag-cloud-link">depression</a>
              </div>
            </div>

            <div class="sidebar-block">
              <h3 class="sidebar-title">Depression</h3>
              <p>Depression is a mental state of low mood and aversion to activity. It affects more than 280 million people of all ages.
                 Depression affects a person's thoughts, behavior, feelings, and sense of well-being...
              <button type="submit">continue</button></p>
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