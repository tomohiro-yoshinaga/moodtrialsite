<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>MOODTrialSite</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo get_template_directory_uri(); ?>/img/mood.favicon.JPG" rel="icon">
  <link href="<?php echo get_template_directory_uri(); ?>/img/mood.favicon.JPG" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,300,700|EB+Garamond" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo get_template_directory_uri(); ?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Minimal
    Template URL: https://templatemag.com/minimal-bootstrap-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
  <?php wp_head(); ?>
</head>


<body data-spy="scroll" data-offset="0" data-target="#theMenu">

  <!-- Menu -->
  <nav class="menu" id="theMenu">
    <div class="menu-wrap">
      <h1 class="logo"><a href="index.html#home">Minimal</a></h1>
      <i class="fa fa-times-circle menu-close"></i>
      <a href="#home" class="smoothscroll">Home</a>
      <a href="#about" class="smoothscroll">About</a>
      <a href="#portfolio" class="smoothscroll">Portfolio</a>
      <a href="#contact" class="smoothscroll">Contact</a>
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-dribbble"></i></a>
      <a href="#"><i class="fa fa-envelope"></i></a>
    </div>

    <!-- Menu button -->
    <div id="menuToggle"><i class="fa fa-bars"></i></div>
  </nav>

  <!-- ========== HEADER SECTION ========== -->
  <section id="home" name="home"></section>
  <div id="headerwrap">
    <div class="container">
      <div class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/moodlogo.jpg" alt="??????" width="120" height="60">
      </div>
      <br>
      <div class="row">
        <h1>MOODTrialSite</h1>
        <br>
        <h3>COFFEE & ESPRESSO</h3>
        <br>
        <br>
        <div class="col-lg-6 col-lg-offset-3">
        </div>
      </div>
    </div>
    <!-- /container -->
  </div>
  <!-- /headerwrap -->
  <?php the_post_thumbnail(); ?>
  <!-- ========== ABOUT SECTION ========== -->
  <section id="about" name="about"></section>
  <div id="f">
    <div class="container">
      <div class="row">
        <h3>ABOUT ME</h3>
        <p class="centered"><i class="icon icon-circle"></i><i class="icon icon-circle"></i><i class="icon icon-circle"></i></p>

        <!-- INTRO INFORMATIO-->
        <div class="col-lg-6 col-lg-offset-3">
          <p>A full time theme crafter based in Madrid, Spain. I love designing beautiful, clean and user-friendly interfaces for websites.</p>
          <p>My passion is turning good ideas and products into eye-catching sites.</p>
          <p>Sometimes I blog about design and web trends. Also I share links and my thoughts on <a href="http://twitter.com/templatemag">Twitter</a>. Need a free handsome bootstrap theme? <a href="http://templatemag.com">Done!</a></p>
          <p>I'm available for freelance jobs. Contact me now.</p>
          <p><button type="button" class="btn btn-warning">I HAVE A FREELANCE JOB</button></p>
        </div>
      </div>
    </div>
    <!-- /container -->
  </div>
  <!-- /f -->

  <!-- ========== CAROUSEL SECTION ========== -->
  <section id="portfolio" name="portfolio"></section>
  <div id="f">
    <div class="container">
      <div class="row centered">
        <h3>SOME PROJECTS</h3>
        <p class="centered"><i class="icon icon-circle"></i><i class="icon icon-circle"></i><i class="icon icon-circle"></i></p>

        <div class="col-lg-6 col-lg-offset-3">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active centered">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/c1.png" alt="">
              </div>
              <div class="item centered">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/c2.png" alt="">
              </div>
              <div class="item centered">
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/c3.png" alt="">
              </div>
            </div>
            <br>
            <br>
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
          </div>
        </div>
        <!-- col-lg-8 -->
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- f -->

  <!-- ========== CONTACT SECTION ========== -->
  <section id="contact" name="contact"></section>
  <div id="f">
    <div class="container">
      <div class="row">
        <h3>CONTACT ME</h3>
        <p class="centered"><i class="icon icon-circle"></i><i class="icon icon-circle"></i><i class="icon icon-circle"></i></p>

        <div class="col-lg-6 col-lg-offset-3">
          <p>Some Avenue, 987<br/>Madrid, Spain<br/>+34 8984-4343</p>
          <p>iam@awesomemail.com</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">

            <div class="form-group">
              <label for="contact-name">Your Name</label>
              <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="contact-email">Your Email</label>
              <input type="email" name="email" class="form-control" id="contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <label for="contact-subject">Subject</label>
              <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
              <div class="validate"></div>
            </div>

            <div class="form-group">
              <label for="contact-message">Your Message</label>
              <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>

            <div class="loading"></div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <div class="form-send">
              <button type="submit" class="btn btn-large">Send Message</button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>

  <div id="copyrights">
    <div class="container">
      <p>
        &copy; Copyrights <strong>Minimal</strong>. All Rights Reserved
      </p>
      <div class="credits">
        <!--
          You are NOT allowed to delete the credit link to TemplateMag with free version.
          You can delete the credit link only if you bought the pro version.
          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/minimal-bootstrap-template/
          Licensing information: https://templatemag.com/license/
        -->
        Created with Minimal template by <a href="https://templatemag.com/">TemplateMag</a>
      </div>
    </div>
  </div>

  <!-- JavaScript Libraries -->
  <script src="<?php echo get_template_directory_uri(); ?>/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/php-mail-form/validate.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/easing/easing.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <?php wp_footer(); ?>
</body>
</html>
