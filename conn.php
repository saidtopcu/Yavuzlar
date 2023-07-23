<?php
// Database connection information
$host = "localhost";
$username = "root";
$password = "";
$database = "yavuzlar";

// Create a database connection
$connection = new mysqli($host, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Fetch blog posts from the database
$blogPosts = [];
$sql = "SELECT title, description, date, author FROM blog_posts";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $blogPosts[] = $row;
    }
}

// Close the database connection
$connection->close();
?>