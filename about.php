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
</div>

<!-- about section -->
<h2 style="text-align: center;margin-top: 50px">
    About Us
</h2>
<section class="about_section layout_padding">
    <div class="container  ">
        <div class="row">
            <div class="col-md-6">
                <div class="detail-box">
                    <h1>Innovate Together - Empowering Collaborative Innovation</h1>
                    <p>
                        At Innovate Together, we believe in the power of collaboration and open-source contributions to
                        drive innovation and change the world. Our platform is designed to provide a transformative
                        experience for individuals seeking to make a positive impact in technology and beyond. Here's
                        what you can expect when you join Innovate Together:
                    </p>
                    <ul>
                        <li><strong>Open-Source Projects:</strong> Dive into a diverse range of open-source projects
                            across various domains. Contribute your skills and creativity to projects that make a
                            meaningful difference in society. Our platform offers opportunities to work on cutting-edge
                            technologies and collaborate with like-minded individuals from around the world.
                        </li>
                        <li><strong>Skill Development:</strong> Enhance your technical prowess and grow as a
                            professional. With access to challenging projects and supportive feedback, you'll refine
                            your coding practices and problem-solving abilities. Innovate Together nurtures a continuous
                            learning environment, empowering you to stay ahead in the ever-evolving tech landscape.
                        </li>
                        <li><strong>Community Support:</strong> Join a vibrant community of mentors and peers who are
                            passionate about making a difference. Receive valuable feedback and guidance from
                            experienced mentors, enabling you to build your expertise and confidence. Engage in
                            meaningful discussions, share knowledge, and forge lasting connections.
                        </li>
                        <li><strong>Leadership Opportunities:</strong> Innovate Together fosters leadership skills by
                            encouraging contributors to take charge of projects and inspire others. Become a team player
                            and lead with confidence, leaving a lasting legacy in the tech community.
                        </li>
                        <li><strong>Positive Impact:</strong> Your contributions on Innovate Together extend beyond
                            code. By collaborating on open-source projects, you actively contribute to solutions that
                            address real-world challenges. Experience the fulfillment of making a positive impact in the
                            global tech ecosystem.
                        </li>
                    </ul>
                    <p>
                        Join Innovate Together today and embark on a transformative journey of growth, learning, and
                        collaborative innovation. Connect with innovative minds, lead with confidence, and be part of a
                        community that believes in the power of collective effort to create a better future. Together,
                        let's shape the world of technology and inspire positive change. #InnovateTogether
                    </p>
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
                        <a class="" href="about.html">
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