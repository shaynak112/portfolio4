
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">

  <!-- HOSTED -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,600italic,300italic,400italic,300,700italic,800italic,800' rel='stylesheet' type='text/css'>
  <link href="fonts/mdi/css/materialdesignicons.min.css" media="all" rel="stylesheet" />

  <!-- LOCAL -->
  <link rel="stylesheet" href="style/style.css">
  <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/ >

  <!-- HOSTED -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>

  <!-- LOCAL -->
  <script src="scripts/pt.min.js"></script>
  <script src="scripts/index.js"></script>
  <script src="scripts/modal.js"></script>

</head>
<body>
<div class="overflow-wrap">

<!-- HOME -->
  <div class="modal-wrap flex">
    <div class="mask"></div>
    <div class="modal" id="modal">
      <div class="carousel-wrap">
        <div class="window">
          <div id="carousel">
          <div class="slide"></div>
          <div class="slide"></div>
          <div class="slide"></div>
          </div>
          <i class="mdi mdi-chevron-left" id="prev"></i>
          <i class="mdi mdi-chevron-right" id="next"></i>
        </div>

      </div>
      <div class="info-box">
        <div class="title"></div>
        <div class="tag"></div>
        <div class="detail"></div>
        <a href="#" target="_blank"><div class="button"><i class="mdi mdi-open-in-new"></i>VIEW SITE</div></a>
      </div>
      <i class="close mdi mdi-close"></i>
    </div>
  </div>

  <section id="home" class="flex height-fix">
    <div id="pt" class="canvas"></div>
    <div class="flex">

      <div class="text">
        <span class="highlight">Shayna Kingsbury</span>.
        <br>
        Web Developer
      </div>

      <div class="button page-link" dest="about">Projects <i class="mdi mdi-arrow-right"></i></div>

      <nav class="flex">
        <div class="link-wrap">
          <div class="active page-link" dest="home">home</div>
          <div class="page-link" dest="about">about</div>
          <div class="page-link" dest="portfolio">portfolio</div>
          <div class="page-link" dest="blog">blog</div>
          <div class="page-link" dest="contact">contact</div>
        </div>
        <i class="mdi mdi-menu"></i>
      </nav>
    </div>

  </section>

<?php

include 'about.php';
include 'portfolio.php';

?>




<!-- BLOG -->
  <section id="blog">
    <div class="container flex">

      <div class="header waypoint" data-animation="slide-in-left">BLOG</div>
      <div class="header-bar waypoint" data-animation="slide-in-left" data-delay=".5s"></div>

      <div class="flex row wrap">
        <div class="flex row-gt-sm">
          <a href="http://blog.eyecuelab.com/2016/04/29/breaking-your-coders-block/" target="_blank">
            <div class="blog-wrap waypoint" data-animation="fade-in">
              <div class="fade-wrap">
                <div class="thumb" id="thumb-1"></div>
                <div class="label bold">Breaking Your Coder's Block</div>
                <div class="date">APRIL 29, 2016</div>
                <div class="bar"></div>
                <div class="text">
                  At one time or another, as a developer, we've all found ourselves hopelessly stuck on a coding issue...
                </div>
              </div>
            </div>
          </a>
          <a href="http://blog.eyecuelab.com/2015/03/19/this-is-your-brain-on-caffeine/" target="_blank">
            <div class="blog-wrap waypoint" data-animation="fade-in" data-delay=".2s">
              <div class="fade-wrap">
                <div class="thumb" id="thumb-2"></div>
                <div class="label bold">!Awake: This is Your Brain on Caffeine</div>
                <div class="date">MARCH 19, 2015</div>
                <div class="bar"></div>
                <div class="text">
                  If there's one thing I can truly claim to be an expert on, it's staying awake. For five years I struggled to stay employed...
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="flex row-gt-sm">
          <a href="http://blog.eyecuelab.com/2015/03/04/getting-a-handle-on-handlebars/" target="_blank">
            <div class="blog-wrap waypoint" data-animation="fade-in" data-delay=".4s">
              <div class="fade-wrap">
                <div class="thumb" id="thumb-3"></div>
                <div class="label bold">Getting a Handle on Handlebars</div>
                <div class="date">MARCH 04, 2015</div>
                <div class="bar"></div>
                <div class="text">
                  Here at EyeCue Lab we render most of our data-laden HTML pages in Handlebar templates...
                </div>
              </div>
            </div>
          </a>
          <a href="http://blog.eyecuelab.com/2015/02/23/essential_extensions/" target="_blank">
            <div class="blog-wrap waypoint" data-animation="fade-in" data-delay=".6s">
              <div class="fade-wrap">
                <div class="thumb" id="thumb-4"></div>
                <div class="label bold">5 Extensions for Your Chrome Toolbelt</div>
                <div class="date">FEBRUARY 23, 2015</div>
                <div class="bar"></div>
                <div class="text">
                  If you're not using Google Chrome as a front-end web developer, you're missing out. Not only is Chrome the...
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact">
    <svg preserveAspectRatio="none" viewBox="0 0 100 102" height="75" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="svgcolor-light">
      <path d="M0 0 L50 100 L100 0 Z" fill="white" stroke="white"></path>
    </svg>
    <div class="container flex">
      <div class="header waypoint" data-animation="slide-in-left">CONTACT</div>
      <div class="header-bar waypoint" data-animation="slide-in-right" data-delay=".25s"></div>
      <div class="highlight waypoint" data-animation="slide-in-right" data-delay=".5s">Have a question or want to work together?</div>
      <form class="waypoint" data-animation="pop-in" data-delay=".5s" id="contact-form">
        <input placeholder="Name" type="text" name="name" required>
        <input placeholder="Enter email" type="email" name="email" required>
        <textarea placeholder="Your Message" type="text" name="message"></textarea>
        <div id="success">
          <div>Your message was sent successfully. Thanks!<span id="close" class="mdi mdi-close"></span></div>
        </div>
        <input class="button" type="submit" id="submit" value=SUBMIT>
      </form>
    </div>
  </section>

  <footer>
    <i class="mdi mdi-chevron-double-up page-link" dest="home"></i>

    <div class="icon-wrap flex row">
      <a href="https://www.linkedin.com/in/mattwilliams85">
        <div class="flex icon" id="icon-2">
          <i class="mdi mdi-linkedin"></i>
        </div>
      </a>
      <a href="https://www.facebook.com/matthew.williams.351">
        <div class="flex icon" id="icon-3">
          <i class="mdi mdi-facebook"></i>
        </div>
      </a>
      <a href="https://instagram.com/infinite_edge/">
        <div class="flex icon" id="icon-4">
          <i class="mdi mdi-instagram"></i>
        </div>
      </a>
      <a href="http://codepen.io/matthewwilliams/">
        <div class="flex icon" id="icon-5">
          <i class="mdi mdi-codepen"></i>
        </div>
      </a>
    </div>
    <div class="info-box">
      <div class="footnote">MATTHEW WILLIAMS <span class="highlight">&copy;2015</span></div>
    </div>
  </footer>

</div>

<div id="preload">
   <img src="img/me.png"/>
   <img src="img/filler.jpg"/>
   <img src="img/thumb-1.jpg"/>
   <img src="img/thumb-2.jpg"/>
   <img src="img/thumb-3.jpg"/>
   <img src="img/thumb-4.jpg"/>
   <img src="img/thumb-5.jpg"/>
   <img src="img/thumb-6.jpg"/>
   <img src="img/blog-1.jpg"/>
   <img src="img/blog-2.jpg"/>
   <img src="img/blog-3.jpg"/>
   <img src="img/blog-4.jpg"/>
   <img src="img/slides/mystand-0.jpg"/>
   <img src="img/slides/mystand-1.jpg"/>
   <img src="img/slides/mystand-2.jpg"/>
   <img src="img/slides/never-0.jpg"/>
   <img src="img/slides/never-1.jpg"/>
   <img src="img/slides/never-2.jpg"/>
   <img src="img/slides/powur-0.jpg"/>
   <img src="img/slides/powur-1.jpg"/>
   <img src="img/slides/powur-2.jpg"/>
   <img src="img/slides/roambi-0.jpg"/>
   <img src="img/slides/roambi-1.jpg"/>
   <img src="img/slides/roambi-2.jpg"/>
   <img src="img/slides/themall-0.jpg"/>
   <img src="img/slides/themall-1.jpg"/>
   <img src="img/slides/themall-2.jpg"/>
   <img src="img/slides/walker-0.jpg"/>
   <img src="img/slides/walker-1.jpg"/>
   <img src="img/slides/walker-2.jpg"/>
</div>

</body>
</html>

<script src="scripts/canvas.js"></script>