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
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>innovate together</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
    <link href="neon.css" rel="stylesheet" />
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

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Get In Touch
        </h2>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" placeholder="Your Name" />
              </div>
              <div>
                <input type="email" placeholder="Your Email" />
              </div>
              <div>
                <input type="text" placeholder="Your Phone" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box ">
                <button>
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
              <a class="" href="contact.html">
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