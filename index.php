<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Farm Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Dewi - v4.7.0
  * Template URL: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<?php session_start(); ?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">Farm Services</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
     
      
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><?php if(isset($_SESSION['username']))
      echo'<a href="rent.php">Rent Equipment</a>';
      else
      echo'<a data-toggle="modal" data-target="#login">Rent Equipment</a>'
      ?></li>
              <li><?php if(isset($_SESSION['username']))
      echo'<a href="rent.php">List Product</a>';
      else
      echo'<a data-toggle="modal" data-target="#login">List Product</a>'
      ?></li>
              <li><a href="#">Know about equipment</a></li>
              <li><a href="#">Know more about best farming practices</a></li>
            </ul>
          </li>
          
          <li><a class="nav-link scrollto" href="ContactUs.html">Contact</a></li>
          <?php if(!isset($_SESSION['username']))
    echo '<a class="getstarted scrollto"  data-toggle="modal" data-target="#login">Login</a>
          <a class="getstarted scrollto"  data-toggle="modal" data-target="#signup">Register</a>'; ?> 

    <?php if(isset($_SESSION['username']))
    echo '<li><a href="rent.php">Dashboard</a> </li>
    <li><a href="logout.php">Logout</a></li>'; ?>
          <!--<li><a class="getstarted scrollto"  data-toggle="modal" data-target="#login">Login</a></li>

          <li><a class="getstarted scrollto" data-toggle="modal" data-target="#signup">SignUp</a></li>-->
        </ul>         <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    <!-- .navbar -->
        
      </div>
    </div>
    </div>
  </header><!-- End Header -->
  <div id="login" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header row">
        <h3 class="modal-title col-md-6 col-xs-6">Login</h3>
        <div class="col-md-4 col-xs-4"></div>
        <button type="button" class="close col-md-2 col-xs-2 float-right" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="login.php" method="post">
          
            <div class="container">
              <label for="uname" class="mx-5 "><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>
              <br>
          
              <label for="psw" class="mx-5 "><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
              <br>
              <button type="submit" class="loginbutton">Login</button>
              <br>
              <div class="row">
              <label class="col-md-3 col-xs-6">
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
              <label class="col-md-3 col-xs-6">
                <a href="">Forgot Password</a>
              </label>
              </div>
              <br>
              <label class="text-center">
                Don't have a account
                <a href="" data-toggle="modal" data-target="#signup">Sign Up</a>
              </label>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
  <div id="signup" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header row">
        <h3 class="modal-title col-md-6 col-xs-6">Sign Up</h3>
        <div class="col-md-4 col-xs-4"></div>
        <button type="button" class="close col-md-2 col-xs-2 float-right" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="signup.php" method="post">
          
            <div class="container">
              <label for="uname" ><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>
              <br>
              <label for="name" ><b>Name</b></label>
              <input type="text" placeholder="Enter Name" name="name" required>
              <br>
              <label for="phone"><b>Phone Number</b></label>
              <input type="tel" placeholder="Enter Phone number" name="phone" required>
              <br>
              <label for="address"><b>Address</b></label>
              <input type="text" placeholder="Enter Address" name="address" required>
              <br>
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
              <br>
              <label for="cpsw"><b>Confirm Password</b></label>
              <input type="password" placeholder="Confirm Password" name="cpsw" required>
              <br>
              <button type="submit" class="loginbutton">Sign Up</button>
              <br>
              <label class="text-center">
                Already have a account
                <a href="" data-toggle="modal" data-target="#login">Login</a>
              </label>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
      <h1>Rent. Pay. Grow.</h1>
      <h2>Here you can rent farming equipments and also learn about best farming practices</h2>
      <div class="d-flex">
      <?php if(isset($_SESSION['username']))
      echo'<a href="rent.php" class="btn-get-started scrollto">Rent Equipment</a>';
      else
      echo'<a data-toggle="modal" data-target="#login" class="btn-get-started scrollto">Rent Equipment</a>'
      ?>
        <a href="#about" class="glightbox btn-watch-video"><span>Know More</span></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

     

        <div class="row">

          <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
            <img src="equipment.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 pt-3 pt-lg-0 content">
            <h3>Farm Services</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</li>
              <li><i class="bx bx-check-double"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</li>
              <li><i class="bx bx-check-double"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</li>
              <li><i class="bx bx-check-double"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= About Boxes Section ======= -->
    <section id="about-boxes" class="about-boxes">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="assets/img/mission.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-brush-4-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Mission</a></h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <img src="assets/img/plan.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-calendar-check-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Plan</a></h5>
                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <img src="assets/img/vision.jpg" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-movie-2-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Vision</a></h5>
                <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet. </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Boxes Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Check our Services</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-gear"></i>
              <h4><?php if(isset($_SESSION['username']))
      echo'<a href="rent.php">Rent Equipment</a>';
      else
      echo'<a data-toggle="modal" data-target="#login">Rent Equipment</a>'
      ?></h4>
              <p>Rent farming equipments according to your need pay accordingly.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-clipboard-check"></i>
              <h4><?php if(isset($_SESSION['username']))
      echo'<a href="rent.php">List Product</a>';
      else
      echo'<a data-toggle="modal" data-target="#login">List Product</a>'
      ?></h4>
              <p>List equipments for rental purpose for that extra income when you don't use them.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-tools"></i>
              <h4><a href="#">Know about Farming Equipments</a></h4>
              <p>You can learn more about farming equipments and their usage.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-brightness-high"></i>
              <h4><a href="#">Know About Best Farming Practices</a></h4>
              <p>Learn about best farming practices from around the globe according to soil type, available resources and requirements.</p>
            </div>
          </div>
          
        </div>

      </div>
    </section><!-- End Services Section -->

    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Connect With US</h3>
              <p>
                <strong>Phone:</strong> +91 1122334455<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="">&#x2709;</i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h3>Useful Links</h3>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="ContactUs.html">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h3>Our Services</h3>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <?php if(isset($_SESSION['username']))
      echo'<a href="rent.php">Rent Equipment</a>';
      else
      echo'<a data-toggle="modal" data-target="#login">Rent Equipment</a>'
      ?></li>
              <li><i class="bx bx-chevron-right"></i> <?php if(isset($_SESSION['username']))
      echo'<a href="rent.php">List products for rent</a>';
      else
      echo'<a data-toggle="modal" data-target="#login">List products for rent</a>'
      ?></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Best use of equipments</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Best Farming Practices</a></li>
            </ul>
          </div>


        </div>
      </div>
    </div>

    
  </footer><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>