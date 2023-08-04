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
    <link href="neon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/metnors.css">

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>

<body class="sub_page">

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

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
                            echo '<li class="nav-item"><span class="nav-link">Welcome, ' . $username . '</span></li>';
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
                                        Connect With Mentors<br>
                                        For Guidance
                                    </h1>
                                    <p>
                                        take a guidance from experts</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class=" col-lg-10 mx-auto">
                                        <div class="img-box">
                                            <!--                        <img src="images/slider-img.png" alt="">-->
                                            <lottie-player src="images/mentors.json" background="transparent"
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
    </section>
</div>
<!-- end slider section -->
<h1 style="text-align: center;margin-top: 25px">Mentors</h1>
<div class="wrap">
    <div class="box">
        <div class="box-top">
            <img class="box-image" src="images/client.jpg" alt="Mahesh">
            <div class="title-flex">
                <h3 class="box-title">Mahesh Moholkar</h3>
                <p class="user-follow-info">17 Projects</p>
            </div>
            <p class="description">Devops Engineer</p>
        </div>
        <a href="#" class="button">Chat Now</a>
    </div>
    <div class="box">
        <div class="box-top">
            <img class="box-image" src="images/mentor2.png" alt="shubham">
            <div class="title-flex">
                <h3 class="box-title">Shubham </h3>
                <p class="user-follow-info">33 Projects</p>
            </div>
            <p class="description">Web App Devloper with 5 Years Of Experience</p>
        </div>
        <a href="#" class="button">Chat Now</a>
    </div>
    <div class="box">
        <div class="box-top">
            <img class="box-image" src="images/mentor3.jpg" alt="ashish">
            <div class="title-flex">
                <h3 class="box-title">Ashish</h3>
                <p class="user-follow-info">26 Projects</p>
            </div>
            <p class="description">AI/Ml Expert with 6 years of industry experience</p>
        </div>
        <a href="#" class="button">Chat Now</a>
    </div>
    <div class="box">
        <div class="box-top">
            <img class="box-image" src="images/mentor4.jpg" alt="sumit">
            <div class="title-flex">
                <h3 class="box-title">Sumit</h3>
                <p class="user-follow-info">12 Projects</p>
            </div>
            <p class="description">Data Engineer With 6 Years of Experience</p>
        </div>
        <a href="#" class="button">Chat Now</a>
    </div>
</div>
<br>
<br>
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
                        <a class="" href="mentor.html">
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