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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                                        Artificial Intelligence<br>
                                        Projects
                                    </h1>
                                    <p>
                                        You Can Contribute a Variety of projects</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class=" col-lg-10 mx-auto">
                                        <div class="img-box">
                                            <!--                        <img src="images/slider-img.png" alt="">-->
                                            <lottie-player src="images/ai.json" background="transparent"
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
<h1 style="text-align: center;margin-top: 20px;margin-bottom: 20px" >Projects Available</h1>
<?php
// ...

// Function to fetch all projects from the database
function fetchAllProjects($pdo)
{
    $sql = "SELECT * FROM contributed_projects WHERE category = 'ai'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Establish a database connection (replace with your database credentials)
$host = 'localhost:3306';
$dbname = 'innovatedb';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch all projects from the database
    $projects = fetchAllProjects($pdo);
} catch (PDOException $e) {
    // Handle any database errors
    echo "Database Error: " . $e->getMessage();
    // You can also log the error for debugging purposes
}

?>
<div class="container">

    <div class="row">
        <?php if (empty($projects)): ?>
            <div class="col-md-12">
                <div class="alert alert-info">
                    <strong>No projects available.</strong> Please check back later.
                </div>
            </div>
        <?php else: ?>
            <?php foreach ($projects as $project): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $project['repository_name']; ?></h5>
                            <p class="card-text"><?php echo $project['repository_description']; ?></p>
                            <p class="card-text"><strong>Languages:</strong> <?php echo $project['languages']; ?></p><br>
                            <a href="<?php echo $project['repo_link']; ?>" class="btn btn-primary" target="_blank">View
                                Repository</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<footer class="footer_section">
    <div class="container">
        <p>
            &copy; <span id="displayYear"></span> All Rights Reserved By
            <a href="#">Innovate Together</a>
        </p>
    </div>
</footer>
</body>
</html>