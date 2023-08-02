<!DOCTYPE html>
<html>
<head>
    <title>GitHub Repositories for Various Categories</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        h2 {
            margin-bottom: 10px;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 250px;
        }
    </style>
</head>
<body>
<h1>GitHub Repositories for Various Categories</h1>

<?php
function fetchGitHubRepositories($language) {
    // Set the GitHub API URL for searching repositories by language and status
    $url = "https://api.github.com/search/repositories?q=language:$language+is:public&sort=stars&order=desc";

    // Initialize cURL session
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute cURL session and get the response
    $response = curl_exec($ch);

    // Close cURL session
    curl_close($ch);

    // Decode the JSON response into an associative array
    $repositories = json_decode($response, true);

    // Return the repositories if found
    if (isset($repositories['items'])) {
        return $repositories['items'];
    } else {
        return array(); // Return an empty array if no repositories found
    }
}

// Define an array of programming languages and frameworks
$categories = array(
    'CSS', 'HTML', 'JavaScript', 'Python', 'React', 'Bootstrap', 'Firebase', 'Node.js', 'MongoDB',
    'Tailwind CSS', 'Flutter', 'Solidity', 'Express', 'Next.js', 'Dart'
);

echo "<div class='card-container'>";

foreach ($categories as $category) {
    $repositoriesData = fetchGitHubRepositories($category);

    if ($repositoriesData) {
        echo "<h2>Repositories for $category</h2>";
        foreach ($repositoriesData as $repo) {
            echo "<div class='card'>";
            echo "<h3>" . $repo['name'] . "</h3>";
            echo "<p>Languages: " . $repo['language'] . "</p>";
            echo "</div>";
        }
    } else {
        echo "<h2>Repositories for $category</h2>";
        echo "<p>No repositories found for $category.</p>";
    }
}

echo "</div>";
?>
</body>
</html>
