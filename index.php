<?php
// Start a session to access user details
session_start();

// Check if the user clicked the logout link
if (isset($_GET['logout'])) {
    // If logout link is clicked, unset the session variable and destroy the session
    unset($_SESSION['username']);
    session_destroy();
}
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Site Metas -->
    <link rel="icon" href="images/fevicon.png" type="image/gif"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>

    <title>Innovate Together</title>


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet"/>

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"/>
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet"/>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <!--    button stylesheet-->
    <link rel="stylesheet" href="neon.css"/>
    <link rel="stylesheet" href="css/userprofile.css">

</head>
<body>

<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.php">
                    <span>Innovate Together</span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-top: 10px">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php"> About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="project.php">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mentor.php">Hire a Mentor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>

                        <?php
                        // Check if the user is logged in (session variable exists)
                        if (isset($_SESSION['username'])) {
                            // If the user is logged in, show the user's name and a logout link
                            $username = $_SESSION['username'];
                            echo '<li class="nav-item"><span class="nav-link">
<nav class="navbar navbar-expand-sm" id="navbar_margin">
  <a class="navbar-brand" href="profile.php">
  Welcome '.$username.'
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a href="profile.php">
  <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="30" height="30" class="rounded-circle">
  </a>
</nav>

</span></li>';
                            echo '<li class="nav-item"><a class="nav-link" href="index.php?logout" id="rgbnt">
 <span class="spbtn"></span>
      <span class="spbtn"></span>
      <span class="spbtn"></span>
      <span class="spbtn"></span>
Logout</a></li>';
                        } else {
                            // If the user is not logged in, show the signup/login link
                            echo '<li class="nav-item"><a class="nav-link" href="register.html" id="rgbnt">
<span class="spbtn"></span>
      <span class="spbtn"></span>
      <span class="spbtn"></span>
      <span class="spbtn"></span>
      Signup/Login</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <h1>
                                        Contribute To <br>
                                        Realtime Projects
                                    </h1>
                                    <p>
                                        You Can Contribute a Variety of projects</p>
                                    <div class="btn-box">
                                        <a href="projectdetails.php" class="btn-1">
                                            Get Started
                                        </a>
                                        <a href="" class="btn-2">
                                            Contact Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class=" col-lg-10 mx-auto">
                                        <div class="img-box">
                                            <!--                        <img src="images/slider-img.png" alt="">-->
                                            <lottie-player src="images/animation_lksbgwvr.json" background="transparent"
                                                           speed="1"
                                                           style="width: 500px; height: 500px;" loop
                                                           autoplay></lottie-player>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <h1>
                                        Highly Qualified <br>
                                        Mentors
                                    </h1>
                                    <p>
                                        Expert Mentors who can help you to start your journey of contribution</p>
                                    <div class="btn-box">
                                        <a href="" class="btn-1">
                                            Mentors
                                        </a>
                                        <a href="" class="btn-2">
                                            Contact Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class=" col-lg-10 mx-auto">
                                        <div class="img-box">
                                            <lottie-player src="images/animation_mentor.json" background="transparent"
                                                           speed="1"
                                                           style="width: 450px; height: 450px;" loop
                                                           autoplay></lottie-player>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <h1>
                                        Chat and get help <br>
                                        From Mentor
                                    </h1>
                                    <p>You can connect with mentors and chat with them to get help</p>
                                    <div class="btn-box">
                                        <a href="" class="btn-1">
                                            Chat With Mentors
                                        </a>
                                        <a href="" class="btn-2">
                                            Contact Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class=" col-lg-10 mx-auto">
                                        <div class="img-box">
                                            <lottie-player src="images/animation_chat.json" background="transparent"
                                                           speed="1"
                                                           style="width: 500px; height: 500px;" loop
                                                           autoplay></lottie-player>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel_btn-box">
                <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <!-- end slider section -->
</div>

<!-- service section -->

<section class="service_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Projects Available
            </h2>
        </div>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="box ">
                    <div class="img-box">
                        <img src="images/s1.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h4>
                            Data Science and BI
                        </h4>
                        <p>
                            Extracting insights from data for informed decisions.
                        </p>
                        <a href="data_science.php">
                            Explore Now
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="box ">
                    <div class="img-box">
                        <img src="images/aiml.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h4>
                            AI/ML
                        </h4>
                        <p>
                            Creating intelligent systems and smart devices
                        </p>
                        <a href="aiml.php">
                            Explore Now
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 ">
                <div class="box ">
                    <div class="img-box">
                        <img src="images/s3.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h4>
                            Cloud Application Development
                        </h4>
                        <p>
                            Building flexible apps on cloud platforms
                        </p>
                        <a href="cloudApplications.php">
                            Explore Now
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="box ">
                    <div class="img-box">
                        <img src="images/s4.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h4>
                            DevOps
                        </h4>
                        <p>
                            Streamlining software development and deployment
                        </p>
                        <a href="devops.php">
                            Explore Now
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="box ">
                    <div class="img-box">
                        <img src="images/s5.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h4>
                            Application Development
                        </h4>
                        <p>
                            Creating diverse software applications.And deploy the applications

                        </p>
                        <a href="applications.php">
                            Explore Now
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="box ">
                    <div class="img-box">
                        <img src="images/s6.png" alt="">
                    </div>
                    <div class="detail-box">
                        <h4>
                            Web Apps
                        </h4>
                        <p>
                            All web projects front end backend projects. And other miscellaneous
                        </p>
                        <a href="webapps.php">
                            Explore Now
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end service section -->

<!-- about section -->

<section class="about_section layout_padding-bottom">
    <div class="container  ">
        <div class="row">
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                            About Us
                        </h2>
                    </div>
                    <p style="font-weight: bold">
                        "Innovate Together is a collaborative platform that empowers new users to contribute to
                        open-source projects, fostering skill development and expanding career opportunities. Join a
                        community of innovative minds to make a positive impact on the world of technology and
                        beyond." </p>
                    <a href="about.php">
                        Read More
                    </a>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="img-box">
                    <img src="images/about-img.png" alt="">
                </div>
            </div>

        </div>
    </div>
</section>
<!-- client section -->
<section class="client_section ">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Contributors Review
            </h2>
        </div>
    </div>
    <div class="container px-0">
        <div id="customCarousel2" class="carousel  slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="images/vinay.png" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <div class="client_info">
                                            <div class="client_name">
                                                <h5>
                                                    Vinay
                                                </h5>
                                                <h6>
                                                    Data Scientist
                                                </h6>
                                            </div>
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        </div>
                                        <p>
                                            Innovate Together is a game-changer! The community's feedback has been
                                            invaluable, propelling my growth as a contributor. It's an inspiring
                                            platform for skill development and making a positive impact in the
                                            open-source world. Highly recommended!"


                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="images/rohan.png" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <div class="client_info">
                                            <div class="client_name">
                                                <h5>
                                                    Rohan
                                                </h5>
                                                <h6>
                                                    Web Developer
                                                </h6>
                                            </div>
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        </div>
                                        <p>
                                            "Innovate Together has been instrumental in my journey as a web developer.
                                            The diverse open-source projects and collaborative community have honed my
                                            skills and boosted my confidence. The feedback from mentors and peers has
                                            been invaluable, and I feel well-prepared to take on new challenges in the
                                            web development field. Highly recommended for aspiring web developers
                                            seeking growth and meaningful connections."
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 mx-auto">
                                <div class="box">
                                    <div class="img-box">
                                        <img src="images/arundhati.png" alt="">
                                    </div>
                                    <div class="detail-box">
                                        <div class="client_info">
                                            <div class="client_name">
                                                <h5>
                                                    Anuradha
                                                </h5>
                                                <h6>
                                                    Backend Developer
                                                </h6>
                                            </div>
                                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                                        </div>
                                        <p>
                                            "Innovate Together transformed my backend development journey. The
                                            open-source projects and supportive community accelerated my learning and
                                            expanded my expertise. Invaluable feedback and mentorship refined my coding
                                            practices, making me more confident in tackling complex challenges. Joining
                                            Innovate Together is a must for any backend developer seeking growth and
                                            meaningful contributions."
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel_btn-box">
                <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- end client section -->

<!-- contact section -->
<section class="contact_section layout_padding-bottom">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Get In Touch
            </h2>
        </div>
        <div class="row">
            <div class="col-md-8 col-lg-6 mx-auto">
                <div class="form_container">
                    <form action="userfeedback.php" method="post" id="myForm" enctype="multipart/form-data">
                        <div>
                            <input type="text" placeholder="Your Name" name="name" required/>
                        </div>
                        <div>
                            <input type="email" placeholder="Your Email" name="email" required/>
                        </div>
                        <div>
                            <input type="text" placeholder="Your Phone" name="phone" required/>
                        </div>
                        <div>
                            <input type="text" class="message-box" placeholder="Message" name="message" required/>
                        </div>
                        <div class="btn_box ">
                            <button type="submit">
                                SEND
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end contact section -->
<!-- JavaScript to handle form submission and show popup -->


<!-- Bootstrap Modal for the popup -->
<!-- info section -->

<section class="info_section layout_padding2">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="info_contact">
                    <h4>
                        Address
                    </h4>
                    <div class="contact_link_box">
                        <a href="">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>
                  Location
                </span>
                        </a>
                        <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                  Call +917083238134
                </span>
                        </a>
                        <a href="">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>
                  mangeshwayal4@gmail.com
                </span>
                        </a>
                    </div>
                </div>
                <div class="info_social">
                    <a href="https://www.facebook.com/Mangeshwayal4">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="https://twitter.com/mangesh_wayal">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="linkedin.com/in/mangesh-wayal-548768191/">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                    <a href="https://github.com/mangeshwayaldeveloper">
                        <i class="fa fa-github" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info_link_box">
                    <h4>
                        Links
                    </h4>
                    <div class="info_links">
                        <a class="active" href="index.php">
                            <img src="images/nav-bullet.png" alt="">
                            Home
                        </a>
                        <a class="" href="about.php">
                            <img src="images/nav-bullet.png" alt="">
                            About
                        </a>
                        <a class="" href="project.php">
                            <img src="images/nav-bullet.png" alt="">
                            Project
                        </a>
                        <a class="" href="mentor.php">
                            <img src="images/nav-bullet.png" alt="">
                            Mentors
                        </a>
                        <a class="" href="contact.php">
                            <img src="images/nav-bullet.png" alt="">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info_detail">
                    <h4>
                        Info
                    </h4>
                    <p>

                        "Innovate Together - Empowering Collaborative Innovation | Join our vibrant community to
                        contribute to open-source projects, enhance your skills, and make a positive impact. Become part
                        of a transformative journey in technology and beyond. Connect, learn, and lead with confidence.
                        #InnovateTogether"
                    </p>
                </div>
            </div>
            <div class="col-md-3 mb-0">
                <h4>
                    Subscribe
                </h4>
                <form action="#">
                    <input type="text" placeholder="Enter email"/>
                    <button type="submit">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- end info section -->


<!-- footer section -->
<footer class="footer_section">
    <div class="container">
        <p>
            &copy; <span id="displayYear"></span> All Rights Reserved By
            <a href="https://html.design/">Innovate Together</a>
        </p>
    </div>
</footer>
<!-- footer section -->

<!-- jQery -->
<script src="js/jquery-3.4.1.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>


</body>

</html>