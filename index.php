<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>EthioTutoring</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div >
                              <a href="index.html"><p style="color: rgb(243, 175, 49); font-size:27px; font-weight:700; padding-bottom:10px; text-align: left;">EthioTutoring</p></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.php">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.php">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="service.php">Services</a>
                              </li>
                              <!-- <li class="nav-item">
                                 <a class="nav-link" href="blog.html">Blog</a>
                              </li> -->
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.php">Contact Us</a>
                              </li>
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <!-- <li data-target="#banner1" data-slide-to="2"></li>
               <li data-target="#banner1" data-slide-to="3"></li>
               <li data-target="#banner1" data-slide-to="4"></li> -->
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <h1>Welcome to EthioTutoring! <br></h1>
                                 <p>We provide a convenient, private online tutoring with our skilled tutors.</p>
                                 <a href="service.html">About More </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure>
                                    <img src="images/tutoringImage1.svg" alt="#"/>
                                    <h3>01</h3>
                                 </figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <h1>Wide Range <br>Tutoring</h1>
                                 <p>Our company provides tutoring programs for students that are on various education levels that range from middle school to Undergrad. </p>
                                 <a href="service.html">About More </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure>
                                    <img src="images/tutoringImage2.jpg" alt="#"/>
                                    <h3>02</h3>
                                 </figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <h1>Strategy And <br>Research</h1>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                 <a href="#">About More </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure>
                                    <img src="images/pct.png" alt="#"/>
                                    <h3>01</h3>
                                 </figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <h1>Strategy And <br>Research</h1>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                 <a href="#">About More </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure>
                                    <img src="images/pct.png" alt="#"/>
                                    <h3>01</h3>
                                 </figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <h1>Strategy And <br>Research</h1>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                 <a href="#">About More </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure>
                                    <img src="images/pct.png" alt="#"/>
                                    <h3>01</h3>
                                 </figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> -->
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end banner -->
      <!-- team -->
      <div class="team">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="team_img">
                     <figure><img src="images/customImage1.jpg" alt="#" style="border-radius: 10px;"/></figure>
                  </div>
               </div>
               <div class="col-md-6 offset-md-1">
                  <div class="titlepage">
                     <h2>Who We Are?</h2>
                     <p>EthioTutoring offers one-on-one, expert tutoring services online. Our service is highly individualized and centered around your child???s specific needs. We work closely with our parents and community to help children reach their full academic potential.</p>
                     <h3>TOTAL STUDENTS TUTORED</h3>
                     <strong>15<span class="yellow">+</span></strong>
                     <a class="read_more" href="about.html"> Read More</a>
                  </div>
               </div>
            </div>
         </div>
         <!-- team -->
         <!-- services -->
         <div  class="services">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 offset-md-1">
                     <div class="titlepage">
                        <h2>Our Tutors' expertise sectors</h2>
                        <p>Our tutors are experts with a lot of years of experience in the following sectors and other many </p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <div id="serv_hover" class="services_box">
                        <i><img src="images/service2.png" alt="#"/></i>
                        <h3>Math</h3>
                        <p>Middle class, Highschool and Undergrad Mathematics</p>
                        <a class="right_irro" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div id="serv_hover" class="services_box">
                        <i><img src="images/service3.png" alt="#"/></i>
                        <h3>Science</h3>
                        <p>Middle class and Highschool sciences including both Social and Natural sciences </p>
                        <a class="right_irro" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div id="serv_hover"  class="services_box">
                        <i><img src="images/service1.png" alt="#"/></i>
                        <h3>Computer Science</h3>
                        <p>Ranges from basic introduction to technology to advanced levels such as programming and software development</p>
                        <a class="right_irro" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end services -->
         <!-- New Ideas  section -->
         <!-- <div class="ideas">
            <div class="container">
               <div class="row">
                  <div class="col-md-10">
                     <div class="titlepage">
                        <h2> New Ideas & Bold Moves</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                     </div>
                  </div>
               </div>
               <div class="border_trbl">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="ideas_box">
                           <h3>80%</h3>
                           <p>Email Marketing</p>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="ideas_box">
                           <h3>70%</h3>
                           <p>Online Marketing</p>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="ideas_box">
                           <h3>60%</h3>
                           <p>Enterprise Marketing</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <!-- end New Ideas  section -->
      <!-- testimonial -->
      <div class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Testimonial</h2>
                     <p>Few testimonials from students about our tutors: </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 ">
                  <div class="test_box margin_bottom">
                     <p>My math tutor from EthioTutoring is helpful and professional. He explains concepts and formulas thoroughly. He is also flexible on time and schedule. I highly recommend EthioTutoring for a math tutor! </p>
                     <div class="test_icon">
                        <i><img src="images/femailprofile.jpg" alt="#" style="height:50px;border-radius: 20px;"/></i>
                        <h4>Vicki <br> <span class="yellow"></span></h4>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="test_box">
                     <p>I used EthioTutoring to get my children a tutor. I was assigned a tutor named Amen. He is a very interactive and good tutor. He explains concepts well. Hence, I highly recommend EthioTutoring.</p>
                     <div class="test_icon">
                        <i><img src="images/manning.jpeg" style="height:50px;border-radius: 20px;" alt="#"/></i>
                        <h4>Manning <br> <span class="yellow"></span></h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end testimonial -->
      <!--  contact -->
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Request A Call Back</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <form id="request" class="main_form" method="post" action="sendEmail.php" >
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Name" type="type" name="name" required> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="email" required> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus1" placeholder="Message" type="type" name="message" required>
                        </div>
                        <?php
                        if(isset($_SESSION['success'])){
                          echo ' <div class="col-md-12">
                          <p class="" style="color: rgb(15, 131, 15);">'. $_SESSION["success"].'</p>
                          </div>';
                          session_unset();
                        }
                        ?>
                        <div class="col-md-12">
                           <button class="send_btn">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-6">
                  <div class="map">
                     <figure><img src="images/map_img.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
      <!--  footer -->
      <footer>
         <div class="footer" style="padding-bottom: 50px;">
            <div class="container">
               <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-8 col-sm-8 mr-3">
                     <p style="color: orange; font-size:27px; font-weight:700; padding-bottom:10px; text-align: left;">EthioTutoring</p>
                     <ul class="about_us">
                        <li>We value our students and parents. Passionate and enthusiast to provide quality service.<br></li>
                     </ul>
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-8 col-sm-8">
                     <h3>Useful Links</h3>
                     <ul class="link_menu">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="service.html">Services</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <h3>Contact Us</h3>
                     <ul class="link_menu">
                        <li><a href="#">Email: info@ethiotutoring.com</a></li>
                     </ul>
                  </div>
                  <!-- <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <h3>The Services</h3>
                     <ul class="link_menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">About services</a></li>
                        <li><a href="#">About Departments</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact Us</a></li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <h3>Contact Us</h3>
                     <ul class="link_menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">About services</a></li>
                        <li><a href="#">About Departments</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact Us</a></li>
                     </ul>
                  </div> -->
                  <!-- <div class="col-md-8 offset-md-4 ">
                     <form class="bottom_form">
                        <h3>Newsletter</h3>
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>
                     </form>
                  </div> -->
               </div>
            </div>
            <!-- <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        <p>?? 2019 All Rights Reserved. Design by <a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div> -->
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>

