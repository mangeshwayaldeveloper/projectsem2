<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the repository details and user name from the form
    $repositoryName = $_POST['repository_name'];
    $repositoryDescription = $_POST['repository_description'];
    $userName = $_POST['user_name'];
    $languages = $_POST['languages'];
    $category = $_POST['category'];
    $link=$_POST['link'];

    // Comma-separated list of languages

    // Validate and sanitize the data
    // (Add your validation and sanitization logic here)

    // Establish a database connection (replace with your database credentials)
    $host = 'localhost:3306';
    $dbname = 'innovatedb';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Prepare the SQL statement to insert data into the database
        $sql = "INSERT INTO contributed_projects (repository_name, repository_description, user_name, languages,category,repo_link) VALUES (:repositoryName, :repositoryDescription, :userName, :languages,:category,:link)";
        $stmt = $pdo->prepare($sql);

        // Bind the parameters
        $stmt->bindParam(':repositoryName', $repositoryName);
        $stmt->bindParam(':repositoryDescription', $repositoryDescription);
        $stmt->bindParam(':userName', $userName);
        $stmt->bindParam(':languages', $languages);
        $stmt->bindParam(':category', $category);
        $stmt->bindParam('link', $link);

        // Execute the SQL statement
        $stmt->execute();

        // Redirect the user back to the previous page or display a success message
        header("Location: profile.php?success=1");
        exit();
    } catch (PDOException $e) {
        // Handle any database errors
        echo "Database Error: " . $e->getMessage();
        // You can also log the error for debugging purposes
    }
} else {
    // If the form is not submitted, redirect the user back to the previous page
    header("Location: previous_page.php");
    exit();
}
