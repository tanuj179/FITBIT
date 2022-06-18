<?php

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


if ($_SERVER['REQUEST_METHOD'] == 'POST' ) 
{
    $fname = $_POST["fname"] ;
    $lname = $_POST["lname"] ;
    $email = $_POST["email"] ;
    $city = $_POST["city"] ;
    $mobile = $_POST["mobile"] ;
    
    $sql = "INSERT INTO `user_master`(`fname`, `lname`, `email`, `city`, `mobile`) VALUES ('$fname', '$lname', '$email', '$city', '$mobile' )";
    $result = mysqli_query($conn , $sql)  ;

    if($result)
    {
       $insert = true;
    }
        else
            {
                echo "sorry :-(" .mysqli_error($conn);
            }

}
?>

<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FIT BIT | Sign-Up Page </title>

    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/stylebmi.css">
    <link rel="stylesheet" href="css/style2.css">
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
                            <li><a href="packages.php">Packages</a></li>
                            <li><a href="classes.php">Classes</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="contactus.php">Contacts</a></li>
                        </ul>
                    </nav>
                    <a href="homepage.php" class="primary-btn signup-btn">Homepage</a>
                    <a href="logout.php" button class="btn btn-light"><i class="bi bi-box-arrow-right" ></a></i></button>
                </div>
                <div id="mobile-menu-wrap"></div>
            </div>
        </header>


 <section class="register-section spad">
<?php
if($insert)
{
 echo "  <div class='alert alert-success' role='alert'>
 Complete your registration <a href='signup2.php' class='alert-link'>Here</a> and Join our family.
</div>" ;
}
?>
    <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="register-text">
                        <div class="section-title">
                            <h2>Register Now</h2>
                            <p>The First 7 Day Trial Is Completely Free With The Trainer/Dietician</p>
                        </div>
                        <form action="/fitbit/signup.php" class="register-form" method="POST">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="fname">First Name</label>
                                    <input type="text" id="fname" name="fname" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="lname">Last Name</label>
                                    <input type="text" id="lname" name="lname" required>
                                </div>
                              
                                
                                <div class="col-lg-8">
                                    <label for="email">Your email address</label>
                                    <input type="text" id="email" name="email" required>
                                </div>

                                <div class="col-lg-6">
                                    <label for="city">Location(City)</label>
                                    <input type="text" id="city" name="city" required>
                                </div>
                                
                               
                                <div class="col-lg-6">
                                    <label for="mobile">Mobile No*</label>
                                    <input type="text" id="mobile" name="mobile" required>
                                </div>
                             </div>

                             

                                <div class="col-lg-6">
                                <input type="radio" id="male" name="gender" value="male">
                                <label for="male">Male</label>
                                
                                <input type="radio" id="female" name="gender" value="female">
                                <label for="female">Female</label>
                                
                                <input type="radio" id="other" name="gender" value="other">
                                <label for="other">Other</label>
                                </div>

                                <button type="submit" class="register-btn" name="submit1">Get Started</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="register-pic">
                        <img src="#" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
               

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>