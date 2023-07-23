<?php
// Define the function and accept $conn as a parameter
function fetchBlogContent($conn)
{
    // Fetch blog content from the database
    $sql = "SELECT * FROM blog";
    $result = $conn->query($sql);

    if ($result) {
        // Check if there are rows returned
        if ($result->num_rows > 0) {
            // Loop through the results and display blog content
            while ($row = $result->fetch_assoc()) {
                echo '<div class="blog-container">';
                echo '<h2 class="blog-top-title mb-4">' . $row["title"] . '</h2>';
                echo '<div class="blog-text-meta-info mb-3">';
                echo '<span class="me-3">' . $row["date_published"] . '</span>';
                echo '<span class="me-3">' . $row["author"] . '</span>';
                echo '</div>';
                echo '<div class="blog-text mb-3">' . $row["content"] . '</div>';
                echo '</div>';
            }
        } else {
            echo "No blog content found.";
        }
    } else {
        echo "Error: " . $conn->error;
    }

    // It's essential to free the result set after use
    $result->free_result();
}
?>
