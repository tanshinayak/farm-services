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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

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
  <header id="header" class="sticky-top bg-dark">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">Farm Services</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
     
      
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
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
    echo '<li class="dropdown"><a href="#"><span>Dashboard</span> <i class="bi bi-chevron-down"></i></a>
    <ul>
      <li><a href="#listedproducts">Products Listed by you</a></li>
      <li><a href="#availableproducts">Products Available</a></li>
      <li><a href="#bookedproducts">Booked Equipments</a></li>
    </ul>
  </li>
    <li><a href="logout.php">Logout</a></li>'; ?>
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
              <label for="psw"><b>Confirm Password</b></label>
              <input type="password" placeholder="Confirm Password" name="psw" required>
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
  <?php
      
      // Include file which makes the
      // Database Connection.
      include 'config.php';
  ?>
   <section>
       <div class="row container-fluid">
        <!--<div class="dropdown col-md-9">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Sort
            </button>
            <ul class="dropdown-menu">
              <li><a href="#">Price (Low - High)</a></li>
              <li><a href="#">Price (High - Low)</a></li>
            </ul>
          </div>-->
          <div class="dropdown col-md-6 m-5">
            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addform">List products for Rent
            </button>
          </div>
          
        <div class="input-group col-md-3 p-5">
            <div class="form-outline row">
              <input type="search" id="form1" class=" col-md-4" placeholder="Search"/>
              <button type="button" class="btn btn-primary col-md-1">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
       </div>
   </section>
   <div id="addform" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header row">
        <h3 class="modal-title col-md-8 col-xs-8">Add Product Details</h3>
        <div class="col-md-2 col-xs-2"></div>
        <button type="button" class="close col-md-2 col-xs-2 float-right" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form action="addproduct.php" method="post">
          
            <div class="container">
              <label for="name" ><b>Name</b></label>
              <input type="text" placeholder="Enter Name" name="name" required>
              <br>
              <label for="price"><b>Price</b></label>
              <input type="text" placeholder="Enter Price" name="price" required>
              <br>
              <label for="days"><b>No. of Days</b></label>
              <input type="number" placeholder="Number of Days" name="days" required>
              <br>
              <label for="date"><b>Date</b></label>
              <input type="date" placeholder="Date" name="date" required>
              <br>
              <label for="description"><b>Description</b></label>
              <textarea type="text" placeholder="Description" name="description" required> </textarea>
              <br>
              <label for="photo"><b>Photo</b></label>
              <input type="file" name="photo" required>
              <br>
              <button type="submit" class="loginbutton">Submit</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
    <!-- ======= Products Listed  ======= -->
    <?php $username = $_SESSION['username'];
    $sql = "SELECT id, heading, price, days, date, description, address, photo FROM product where username='$username'";
			$resultset = mysqli_query($conn, $sql);		?>
      <section>
      <div class="row container-fluid" id='listedproducts'>	
        <h3>Products Listed By You </h3>
		<?php	while( $record = mysqli_fetch_assoc($resultset) ) {
			?>
        <div class="card col-md-3 col-xs-6 mx-5" >
            <img class="card-img-top" src="<?php echo $record['photo']; ?>" alt="Card image">
            <div class="card-body">
              <h4 class="card-title"><?php echo $record['heading']; ?></h4>
              <p class="card-text"><?php echo $record['description']; ?>
            <br>
            <div class="row"><h5 class="col-md-4">Date:</h5><p class="col-md-8"><?php echo $record['date']; ?></p></div>
          <div class="row"><h5 class="col-md-4">No. of Days:</h5><p class="col-md-8"><?php echo $record['days']; ?></p></div>
          <div class="row"><h5 class="col-md-4">Address:</h5><p class="col-md-8"><?php echo $record['address']; ?></p></div>
          <a href="#" class="btn cardbutton">Edit</a>    
          <a href="#" class="btn cardbutton">Remove</a>
            </div>
          </div>
    <?php } ?>
    <!-- ======= Products Avaialable  ======= -->
    <?php $sql = "SELECT id, heading, price, days, date, description, address, photo FROM product where not username= '$username';";
			$resultset = mysqli_query($conn, $sql);		?>
      <section>
      <div class="row container-fluid" id='availableproducts'>	
        <h3>Products Available </h3>
		<?php	while( $record = mysqli_fetch_assoc($resultset) ) {
			?>
        <div class="card col-md-3 col-xs-6 mx-5" >
            <img class="card-img-top" src="<?php echo $record['photo']; ?>" alt="Card image">
            <div class="card-body">
              <h4 class="card-title"><?php echo $record['heading']; ?></h4>
              <p class="card-text"><?php echo $record['description']; ?>
            <br>
            <div class="row"><h5 class="col-md-4">Date:</h5><p class="col-md-8"><?php echo $record['date']; ?></p></div>
          <div class="row"><h5 class="col-md-4">No. of Days:</h5><p class="col-md-8"><?php echo $record['days']; ?></p></div>
          <div class="row"><h5 class="col-md-4">Address:</h5><p class="col-md-8"><?php echo $record['address']; ?></p></div>
              <a href="#" class="btn cardbutton">Book</a>
            </div>
          </div>
    <?php } ?>
    <!-- ======= Products Booked  ======= -->
    <?php $sql = "SELECT id, heading, price, days, date, description, address, photo FROM bookedproducts where username= '$username';";
			$resultset = mysqli_query($conn, $sql);		?>
      <section>
      <div class="row container-fluid" id='availableproducts'>	
        <h3>Products Booked By You </h3>
		<?php	while( $record = mysqli_fetch_assoc($resultset) ) {
			?>
        <div class="card col-md-3 col-xs-6 mx-5" >
            <img class="card-img-top" src="<?php echo $record['photo']; ?>" alt="Card image">
            <div class="card-body">
              <h4 class="card-title"><?php echo $record['heading']; ?></h4>
              <p class="card-text"><?php echo $record['description']; ?>
            <br>
            <div class="row"><h5 class="col-md-4">Date:</h5><p class="col-md-8"><?php echo $record['date']; ?></p></div>
          <div class="row"><h5 class="col-md-4">No. of Days:</h5><p class="col-md-8"><?php echo $record['days']; ?></p></div>
          <div class="row"><h5 class="col-md-4">Address:</h5><p class="col-md-8"><?php echo $record['address']; ?></p></div>
              <a href="#" class="btn cardbutton">Book</a>
            </div>
          </div>
    <?php } ?> -->
    </div>
    </section>

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