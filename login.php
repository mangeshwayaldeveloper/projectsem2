<?php
// Start a session to handle user authentication
session_start();

// Function to connect to the database
function connectToDatabase()
{
    $host = 'localhost:3306';
    $username = 'root';
    $password = '';
    $database = 'innovatedb';

    $conn = mysqli_connect($host, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}

// Function to validate user login
function validateLogin($email, $password)
{
    $conn = connectToDatabase();

    // Sanitize inputs
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    // Query the database using a prepared statement to avoid SQL injection
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_stmt_init($conn);

    if (mysqli_stmt_prepare($stmt, $sql)) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $storedPassword = $row['password'];

            // Verify the password by comparing plain text passwords
            if ($password === $storedPassword) {
                // Login successful, set user session
                $_SESSION['username'] = $row['username'];
                // Redirect the user to the dashboard or other protected page
                header("Location: index.php");
                exit;
            } else {
                echo "Invalid email or password. Please try again.";
            }
        } else {
            echo "User not found. Please check your credentials.";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "Error in the database query.";
    }

    mysqli_close($conn);
}

// Handle login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        validateLogin($email, $password);
    } else {
        echo "Email and password fields are required.";
    }
}
?>
