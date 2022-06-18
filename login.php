<?php
session_start();

$insert = false;
$servername = "localhost";
$username = "root";
$password = "" ;
$database = "user_entry";

$conn = mysqli_connect($servername,$username,$password,$database) ;

if(!$conn)
{
    die("Sorry , Failed to connect" .mysqli_connect_error());
}


if (isset($_POST['login']))
{
    $uname = $_POST['uname'] ;
    $pwd = $_POST['pwd'] ;

    $query = "SELECT * FROM `user_crud` WHERE username='$uname' and password ='$pwd' LIMIT 1 ";
    if ($uname = 'uname')
    {
        if($pwd = 'pwd')
        {
            echo "done" ;
        }
        else
        {
            echo "sorry" .mysqli_error($conn) ;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FIT BIT | Login Page </title>
        
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
                        <li><a href="homepage.php">Home</a></li>
                        <li><a href="packages.php">Packages</a></li>
                            <li><a href="classes.php">Classes</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="contactus.php">Contacts</a></li>
                        </ul>
                    </ul>
                </nav>
                <a href="signup.php" class="primary-btn signup-btn">Sign Up Today</a>
                <a href="logout.php" button class="btn btn-light"><i class="bi bi-box-arrow-right" ></a></i></button>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>

    

    <form action="/signup.php" method="POST">
    <section class="register-section spad">

    <div class="alert alert-secondary" role="alert" text-align:>
    Not a user yet ? <a href="/fitbit/signup.php" class="alert-link">Sign-Up Today</a> and Join our family.
    </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="register-text">
                        <div class="section-title">

                        <div class="form-group">
                      <label for="uname">Username</label>
                         <input type="text" class="form-control" id="uname" aria-describedby="uname" placeholder="Enter username">
                         <small id="uname" class="form-text text-muted">We'll never share your username with anyone else.</small>
                      </div>
 
                 <div class="form-group">
                    <label for="password">Password</label>
                 <input type="password" class="form-control" id="pwd" name="pwd">
                </div>
  
                <div class="form-check">
                 <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remember me</label>
             </div>
             <a href="blog.php" button type="submit" class="btn btn-primary" name="login">Login</a></button>
            
                         </form>
                    </section>
                </div>
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