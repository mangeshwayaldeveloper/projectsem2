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

<?php
//// Start the session to access session variables
//session_start();
//
//// Check if the user is logged in
//if (isset($_SESSION['username']) && isset($_SESSION['url'])) {
//    $username = $_SESSION['username'];
//    $url = $_SESSION['url'];
//
//    // Function to fetch user data from the GitHub API
//    function fetchUserData($url)
//    {
//        $ch = curl_init($url);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0'); // GitHub requires a user-agent header
//        $response = curl_exec($ch);
//        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//        curl_close($ch);
//
//        // Check if the request was successful (status code 200)
//        if ($httpCode === 200) {
//            return json_decode($response, true);
//        } else {
//            return false;
//        }
//    }
//
//    // Fetch user data from the provided GitHub URL
//    $userData = fetchUserData($url);
//
//    if (!$userData) {
//        $error = "Error fetching user data from GitHub.";
//    }
//} else {
//    // If the user is not logged in, redirect to the login page
//    header("Location: login.php");
//    exit;
//}
//?>

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
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            padding-top: 50px;
        }

        .avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
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
  Welcome ' . $username . '
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
    <?php
    // Enable error reporting
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    function fetchUserDetails($accessToken, $username)
    {
        $apiUrl = "https://api.github.com/users/{$username}";
        $ch = curl_init($apiUrl);

        // Set cURL options to authenticate and accept JSON response
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['User-Agent: PHP', "Authorization: token {$accessToken}"]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        if ($httpCode !== 200) {
            return false; // Request failed, return false or handle the error
        }

        return json_decode($response, true);
    }

    function fetchUserRepositories($accessToken, $username)
    {
        $apiUrl = "https://api.github.com/users/{$username}/repos";
        $ch = curl_init($apiUrl);

        // Set cURL options to authenticate and accept JSON response
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['User-Agent: PHP', "Authorization: token {$accessToken}"]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        if ($httpCode !== 200) {
            return false; // Request failed, return false or handle the error
        }

        return json_decode($response, true);
    }

    function fetchRepoLanguages($accessToken, $owner, $repository)
    {
        $apiUrl = "https://api.github.com/repos/{$owner}/{$repository}/languages";
        $ch = curl_init($apiUrl);

        // Set cURL options to authenticate and accept JSON response
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['User-Agent: PHP', "Authorization: token {$accessToken}"]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        if ($httpCode !== 200) {
            return false; // Request failed, return false or handle the error
        }

        return json_decode($response, true);
    }

    // Replace "YOUR_PERSONAL_ACCESS_TOKEN" with your actual Personal Access Token
    $accessToken = "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";
    $githubUrl = 'https://github.com/AshishJadhav45';
    // Your GitHub URL

    // // Replace USERNAME with the GitHub username
    if (isset($_SESSION['url'])) {
        // Store the GitHub URL in a session variable
        $githubUrl = $_SESSION['url'];

    }
    // Extract username from the URL
    if (preg_match("#^(https?://)?github\.com/([a-zA-Z0-9_-]+)$#", $githubUrl, $matches)) {
        $username = $matches[2];

        // Fetch user details using the access token and username
        $userDetails = fetchUserDetails($accessToken, $username);

        if ($userDetails !== false) {
            // Fetch user repositories using the access token and username
            $repositories = fetchUserRepositories($accessToken, $username);

            if ($repositories !== false) {
                // Fetch languages used in each repository
                foreach ($repositories as &$repo) {
                    $languages = fetchRepoLanguages($accessToken, $userDetails['login'], $repo['name']);
                    $repo['languages'] = $languages;
                }
            } else {
                echo "Failed to fetch user repositories.";
            }
        } else {
            echo "Failed to fetch user details.";
        }
    } else {
        echo "Invalid GitHub user URL. Please enter a valid URL.";
    }
    ?>

    <section class="slider_section ">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <?php if (isset($userDetails) && $userDetails !== false): ?>
                                        <h1>
                                            Welcome<br>
                                            <?php echo $userDetails['name']; ?>
                                        </h1>
                                        <p>Email: <?php echo $userDetails['email']; ?></p>
                                        <p>Location: <?php echo $userDetails['location']; ?></p>
                                        <p>Followers: <?php echo $userDetails['followers']; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class=" col-lg-10 mx-auto">
                                        <div class="img-box">
                                            <?php if (isset($userDetails['avatar_url'])): ?>
                                                <img src="<?php echo $userDetails['avatar_url']; ?>"
                                                     class="rounded-circle shadow-4-strong"
                                                     style="max-width: 100px;" alt="Avatar">
                                            <?php endif; ?>
                                            <!--                                            <img class="rounded-circle shadow-4-strong" alt="avatar2"-->
                                            <!--                                                 src="https://avatars.githubusercontent.com/u/120046874?v=4"/>-->
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

<!--<h1 style="text-align: center;margin-top: 20px;margin-bottom: 20px">Projects Available</h1>-->


<div class="container mt-5">
    <!--    <h2>GitHub User Details Fetcher</h2>-->
    <!---->
    <!--    --><?php //if (isset($userDetails) && $userDetails !== false): ?>
    <!--        <div class="row mt-3">-->
    <!--            <div class="col-md-4">-->
    <!--                <div class="card">-->
    <!--                    <div class="card-body">-->
    <!--                        <h5 class="card-title">--><?php //echo $userDetails['login']; ?><!--</h5>-->
    <!--                        --><?php //if (isset($userDetails['avatar_url'])): ?>
    <!--                            <img src="-->
    <?php //echo $userDetails['avatar_url']; ?><!--" class="img-fluid rounded-circle mb-3"-->
    <!--                                 style="max-width: 100px;" alt="Avatar">-->
    <!--                        --><?php //endif; ?>
    <!--                        <p>Name: --><?php //echo $userDetails['name']; ?><!--</p>-->
    <!--                        <p>Email: --><?php //echo $userDetails['email']; ?><!--</p>-->
    <!--                        <p>Location: --><?php //echo $userDetails['location']; ?><!--</p>-->
    <!--                        <p>Followers: --><?php //echo $userDetails['followers']; ?><!--</p>-->
    <!--                        <!-- Display other user details as needed -->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    --><?php //endif; ?>

    <?php if (isset($repositories) && $repositories !== false): ?>
        <div class="row mt-3">
            <div class="col-md-12">
                <h3>Public Repositories</h3>
                <div class="card-columns">
                    <?php foreach ($repositories as $repo): ?>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $repo['name']; ?></h5>
                                <p class="card-text"><?php echo $repo['description']; ?></p>
                                <?php if (isset($repo['languages']) && !empty($repo['languages'])): ?>
                                    <p class="card-text">
                                        <strong>Languages:</strong> <?php echo implode(', ', array_keys($repo['languages'])); ?>
                                    </p>
                                <?php endif; ?>
                                <a href="<?php echo $repo['html_url']; ?>" class="btn btn-primary" target="_blank">View
                                    Repository</a>
                                <br>
                                <br>
                                <script>
                                    function validateForm() {
                                        // Get the selected category value
                                        var category = document.querySelector('input[name="category"]:checked');

                                        // Check if a category is selected
                                        if (!category) {
                                            alert("Please select a category.");
                                            return false; // Prevent form submission
                                        }

                                        return true; // Allow form submission
                                    }
                                </script>
                                <!-- Inside the foreach loop for displaying repositories -->
                                <form action="makeavailable.php" method="post">
                                    <input type="hidden" name="repository_name" value="<?php echo $repo['name']; ?>">
                                    <input type="hidden" name="repository_description"
                                           value="<?php echo $repo['description']; ?>">
                                    <input type="hidden" name="user_name" value="<?php echo $userDetails['login']; ?>">
                                    <input type="hidden" name="link" value="<?php echo $repo['html_url']; ?>">
                                    <input type="hidden" name="languages"
                                           value="<?php echo implode(',', array_keys($repo['languages'])); ?>">
                                    <label>Select Category:</label><br>
                                    <input type="radio" name="category" value="data" id="data" required>
                                    <label for="webapp">Data Science</label><br>

                                    <input type="radio" name="category" value="ai" id="ai" required>
                                    <label for="mobileapp">AI/ML</label><br>

                                    <input type="radio" name="category" value="cloud" id="cloud" required>
                                    <label for="other">Cloud Apps</label><br>

                                    <input type="radio" name="category" value="devops" id="devops" required>
                                    <label for="webapp">Devops</label><br>

                                    <input type="radio" name="category" value="mobileapp" id="mobileapp" required>
                                    <label for="mobileapp">Mobile App</label><br>

                                    <input type="radio" name="category" value="website" id="website" required>
                                    <label for="other">Web App Or Other</label><br>

                                    <button type="submit" class="btn btn-primary">Make Available for Contribution
                                    </button>
                                </form>


                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
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