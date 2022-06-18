
<?php
$insert = false;
$servername = "localhost" ;
$username = "root" ;
$password = "" ;
$database = "user_entry" ;

$conn = mysqli_connect($servername , $username , $password , $database);

if(!$conn)
{
    echo "nope" .mysqli_connect_error()  ;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $package_id = $_POST['package_id'];
    $uname = $_POST['uname'];
    $time = $_POST['time'];
    $amt = $_POST['amt'];


$sql = " INSERT INTO `payment_master`(`full_name`, `uname`,`email` , `package_id`, `time`, `amt`) VALUES ('$full_name' , '$uname' , '$email' , '$package_id' ,'$time' , '$amt' ) " ;
$result = mysqli_query($conn , $sql) ;

if($result) 
{
    $insert = true ;
}
else
{
    echo " Payment unsuccessfull , Pls try again later " .mysqli_error($conn) ;
}
            
}
?>
<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> FIT BIT | Payment Gateway </title>

    
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


    <section class="register-section spad">
    <?php
if($insert)
{
 echo " <div class='alert alert-success' role='alert'>
 Click here <a href='paymentdone.php' class='alert-link'>and complete your </a> payment .
</div>" ;
}
?>


    <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="register-text">
                        <div class="section-title">
                            <h2>Payement Gateway</h2>
                             <p>Get your package now.</p>
                        </div>
                        <form action="/fitbit/payment.php" class="register-form" method="POST">

                            <div class="row">
                                <div class="col-lg-9">
                                    <label for="full_name">Enter Full Name</label>
                                    <input type="text" id="full_name" name="full_name" required>
                                </div>
                              
                              
                                <div class="col-lg-9">
                                    <label for="email">Your email address</label>
                                    <input type="text" id="email" name="email" required>
                                </div>

                                <div class="col-lg-3">
                                    <label for="package_id">Enter Package ID</label>
                                    <input type="text" id="package_id" name="package_id" required>
                                </div>
                                 

                                <div class="col-lg-6">
                                    <label for="uname">Username</label>
                                    <input type="text" id="uname" name="uname">
                                </div>

                                <div class="col-lg-6">
                                    <label for="time">Duration</label>
                                    <input type="text" id="time" name="time">
                                </div>


                                <div class="col-lg-5">
                                    <label for="amt">Enter Amount Rs.</label>
                                    <input type="text" id="amt" name="amt">
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="radio1">  DEBIT CARD </label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="Radio2"> CREDIT CARD</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="Radio3"> NET BANKING</label>
                                </div>
                    <br><br>
                     <div class="col-lg-9">   
                     <button type='submit' class='register-btn' name='submit3'>Submit</button>    
                
    </form>
    </div>
    </section>
    </div>
    </div>
    </div>
    </div>
    </div>

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