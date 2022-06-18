<?php

$insert = false;
$servername = "localhost";
$username = "root";
$password = "" ;
$database = "phpadminpanel";

$conn = mysqli_connect($servername,$username,$password,$database) ;

if(!$conn)
{
    die("Sorry , Failed to connect" .mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FIT BIT | Blog</title>

    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/stylebmi.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

     
  <style>
header {
 background-image: url("img/footer-signup.jpg");
}
    </style>

</head>
<body>
    
    <div id="preloder">
        <div class="loader"></div>
    </div>

   
    <header class="header-section">
        <div class="container">
            <div class="logo">
                <a href="./index.html">
                    <img src="img/logofb.png" alt="">
                </a>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li class="active"><a href="homepage.php">Home</a></li>
                        <li><a href="packages.php">Packages</a></li>
                        <li><a href="classes.php">Classes</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="contactus.php">Contacts</a></li>
                    </ul>
                </nav>
                <a href="signup.php" class="primary-btn signup-btn">Sign Up Today</a>
                <a href="logout.php" button class="btn btn-light"><i class="bi bi-box-arrow-right" ></a></i></button>                
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
                <br><br>

    <section class="trainer-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>EXPERT TRAINERS</h2>
                    </div>
                </div>
            </div>

            <table class='table'>
  <thead>
    <tr>
      <th scope='col'>Trainer No.</th>
      <th scope='col'>Name</th>
      <th scope='col'>Area of Expertise</th>
      <th scope='col'>Phone</th>
      <th scope='col'>Location</th>
    </tr>
  </thead>

    <?php
    $sql = "SELECT * FROM `trainer` " ;
    $result = mysqli_query($conn , $sql);
    while ( $row = mysqli_fetch_assoc($result)) 
    {
        echo "
    <tbody>
    <tr>
      <th scope='row'>". $row['id']."</th>
      <td>". $row['fname']."  ". $row['lname']. "</td>
      <td>". $row['area']."</td>
      <td>". $row['phone']."</td>
      <td>". $row['location']."</td>

    </tr>
  </tbody>
 ";
    }
    ?>

</table>

<a href="packages.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">BOOK NOW</a>

<section class="trainer-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>EXPERT DIETICIANS</h2>
                    </div>
                </div>
            </div>

            <table class='table'>
  <thead>
    <tr>
      <th scope='col'>Dietician No.</th>
      <th scope='col'>Name</th>
      <th scope='col'>Area of Expertise</th>
      <th scope='col'>Phone</th>
      <th scope='col'>Location</th>
    </tr>
  </thead>



    <?php
    $sql = "SELECT * FROM `dietician` " ;
    $result = mysqli_query($conn , $sql);
    while ( $row = mysqli_fetch_assoc($result)) 
    {
        echo "
    <tbody>
    <tr>
      <th scope='row'>". $row['id']."</th>
      <td>". $row['fname']."  ". $row['lname']. "</td>
      <td>". $row['area']."</td>
      <td>". $row['phone']."</td>
      <td>". $row['location']."</td>

    </tr>
  </tbody>
 ";
    }
    ?>

</table>


<a href="packages.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">BOOK NOW</a>

   
<br><br>
            
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-option">
                        <span>Phone</span>
                        <p>7441522636 - 9985774569</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-option">
                        <span>Address</span>
                        <p>72, Gandhi Street ,Banglore , India</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-option">
                        <span>Email</span>
                        <p>fitnesscentral@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="subscribe-option set-bg" data-setbg="img/footer-signup.jpg">
                <div class="so-text">
                    <h4>Subscribe To Our Mailing List</h4>
                    <p>Sign up to receive the latest information </p>
                </div>
                <form action="#" class="subscribe-form">
                    <input type="text" placeholder="Enter Your Mail">
                    <button type="submit"><i class="fa fa-send"></i></button>
                </form>
            </div>
            <div class="copyright-text">
                <ul>
                    <li><a href="#">Term&Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
                <p>&copy;<p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart" aria-hidden="true"></i> by <a href="adminpanel.php" target="_blank">Fitness Central</a>
  </p></p>
                <div class="footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                </div>
            </div>
        </div>
    </footer>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>