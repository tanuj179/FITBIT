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

    $height = $_POST["height"] ;
    $weight = $_POST["weight"] ;
    $age = $_POST["age"] ;
    $uname = $_POST["uname"] ;
    $pwd = $_POST["pwd"] ;
    $goal = $_POST["goal"] ;
    $sql = "INSERT INTO `user_crud`(`height`, `weight`, `age`, `uname`, `password` , `goal`) VALUES ('$height' , '$weight' ,'$age' ,'$uname' ,'$pwd' , '$goal' )";
    $result = mysqli_query($conn , $sql) ;

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
    <title>FIT BIT | Complete your registration </title>

    
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
 echo "  <div class='alert alert-success' role='alert'>
You are a member <a href='login.php' class='alert-link'>now</a> and Join our family.
</div>" ;
}
?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="register-text">
                        <div class="section-title">
                            <h2>Register Now</h2>
                            <p>Complete your registration here !</p>

                            <form action="/fitbit/signup2.php" class="register-form" method="POST">
                            <div class="row">

                            <div class="col-lg-4">
                                    <label for="height">Height (in cms)</label>
                                    <input type="text" id="height" name="height">
                                </div>
                                <div class="col-lg-4">
                                    <label for="weight">Weight (in kg) </label>
                                    <input type="text" id="weight" name="weight">
                                </div>
                                <div class="col-lg-4">
                                    <label for="age">Your Age</label>
                                    <input type="age" id="age" name="age">
                                </div>

                                <div class="col-lg-6">
                                    <label for="uname">Enter a username (5char+num allowed)</label>
                                    <input type="text" id="uname" name="uname">
                                </div>

                                <div class="col-lg-6">
                                    <label for="password">Enter a password (5numerics allowed)</label>
                                    <input type="password" id="pwd" name="pwd">
                                </div>

                                <div class="col-lg-10">
                                    <label for="goal">What is your goal ? What are you expecting from us ?</label>
                                    <input type="text" id="goal" name="goal">
                                </div>
                                    
              
                     <div>                      
                  <button type="submit" class="register-btn" name="submit2">Submit</button>
              </div>
         </form>
    </div>
  

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>