<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FIT BIT | Home-Page</title>

    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/stylebmi.css">
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
                        <li class="active"><a href="home.php">Home</a></li>
                        <li><a href="packages.php">Packages</a></li>
                        <li><a href="classes.php">Classes</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="contactus.php">Contacts</a></li>
                    </ul>
                </nav>
                <a href="signup.php" class="primary-btn signup-btn">Sign Up Today</a>
                <a href="login.php" class="primary-btn signup-btn">Log In</a>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
                

<script type="text/javascript">
                                
                    function BMI() {
                              var h = document.getElementById('h').value;
                              var w = document.getElementById('w').value;
                              var bmi = w / (h / 100 * h / 100);
                              var bmio = (bmi.toFixed(2));

                        document.getElementById("result").innerHTML = "Your BMI is " + bmio;

                if (bmio < 18.6) result.innerHTML =
                             `Your BMI is Under Weight : <span>${bmi}</span>`;

                 else if (bmio >= 18.6 && bmio < 24.9) result.innerHTML = 
                             `Your BMI is Normal : <span>${bmi}</span>`;

                 else result.innerHTML =
                              `Your BMI is Over Weight : <span>${bmi}</span>`;

       
    }
</script>

    <section class="hero-section set-bg" data-setbg="img/hero3.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="hero-text">
                        <span>FITNESS ELEMENTS</span>
                        <h2>BMI CALCULATOR</h2>
                        <p>Calculate your BMI and get your health card </p>
                        <p class="text">Height</p>
                    <input type="text" id="h">
                    <p class="text">Weight</p>
                    <input type="text" id="w">
                    <p id="result"></p>
                    <button id="btn" onClick="BMI()">Calculate</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-pic">
                        <img src="img/about-pic.jpg" alt="">
                       
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h2>Story About Us</h2>
                        <p class="first-para">Covid-19 pandemic has hit us hard both mentally and physically , which is
                            why we offer you various ways to keep yourself happy & healthy at home at your convienience.
                            Isnt that great ? Join our programs with the best trainers , dieticians and yoga tutors of the country .
                            Start your journey now.
                        </p>
                        <p class="second-para">Our wesbite has helped a wide range of clients successfully
                             achieve their desired goals. Individual client programmes have included everything 
                             from body transformation like fat to fit , given a healthy lifestyle 
                             with professional dieticins , to general strength and yoga.
                            <br> Get in touch for more information about @fitnesscentral</p>
                        <a href="aboutus.php" class="primary-btn">Click Here 
                          </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="services-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="services-pic">
                        <img src="img/medi.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-items">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="services-item bg-gray">
                                    <img src="img/services/service-icon-1.png" alt="">
                                    <h4>Strategies</h4>
                                    <p>Aenean massa. Cum sociis Theme et natoque penatibus et magnis dis part urient
                                        montes.</p>
                                </div>
                                <div class="services-item bg-gray pd-b">
                                    <img src="img/services/service-icon-3.png" alt="">
                                    <h4>Workout</h4>
                                    <p>Aenean massa. Cum sociis Theme et natoque penatibus et magnis dis part urient
                                        montes.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="services-item">
                                    <img src="img/services/service-icon-2.png" alt="">
                                    <h4>Yoga</h4>
                                    <p>Aenean massa. Cum sociis Theme et natoque penatibus et magnis dis part urient
                                        montes.</p>
                                </div>
                                <div class="services-item pd-b">
                                    <img src="img/services/service-icon-4.png" alt="">
                                    <h4>Healthy Diet</h4>
                                    <p>Aenean massa. Cum sociis Theme et natoque penatibus et magnis dis part urient
                                        montes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Success Stories</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="testimonial-slider owl-carousel">
                        <div class="testimonial-item">
                            <p> Most of my work is sitting 12hours in front of the laptop with no physical activity.
                                This pandemic situation made it worse. WFH is a big hit but my body was a flop.
                                 My blood sugar levels and and high cholesterol levels were increasing like covid-19 cases in india.
                                 Hence , i signed up for yoga and basic yoga . Rest you can say :-) </p>
                            <div class="ti-pic">
                                <img src="img/faces/face1.jpg" alt="">
                                <div class="quote">
                                    <img src="img/testimonial/quote-left.png" alt="">
                                </div>
                            </div>
                            <div class="ti-author">
                                <h4>Pratik Gupta</h4>
                                <span>Software Engineer</span>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <p>With increasing age , i was suffereing minimal chest pain every other day .
                                Therefore , i registred for a dietician because as a housewife , i know for a fact 
                                your medicine is your kitchen. i knew i required a proper diet plan due to increasing age.
                            </p>
                            <div class="ti-pic">
                                <img src="img/faces/face2.jpg" alt="">
                                <div class="quote">
                                    <img src="img/testimonial/quote-left.png" alt="">
                                </div>
                            </div>
                            <div class="ti-author">
                                <h4>Lisa Coutihno</h4>
                                <span>House-Wife</span>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <p>Its always expected from a model to keep a toned body in this fashion buisness.
                                Before this pandemic , my routine included 2-3hours of daily workout.
                                Thank goodness for these experts , i could continue my schedule even
                                 in this pandemic at my home with the best team. </p>
                            <div class="ti-pic">
                                <img src="img/faces/face3.jpg" alt="">
                                <div class="quote">
                                    <img src="img/testimonial/quote-left.png" alt="">
                                </div>
                            </div>
                            <div class="ti-author">
                                <h4>Manashvi Chopra</h4>
                                <span>Fashion model</span>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <p>I am in my fifties and i suffer from high blood pressure due to constant stress and tension.
                            My daughter suggested me to start online yoga sessions that`s where i came to know about this website.
                            It has helped me a lot mentally and physically both.</p>
                            <div class="ti-pic">
                                <img src="img/faces/face4.jpg" alt="">
                                <div class="quote">
                                    <img src="img/testimonial/quote-left.png" alt="">
                                </div>
                            </div>
                            <div class="ti-author">
                                <h4>Sudesh Mehta</h4>
                                <span>Civil Engineer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
   
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