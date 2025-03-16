<?php
// lfi_vulnerable.php - Vulnerable to Local File Inclusion (LFI)

// Get the 'page' parameter from the URL (no sanitization, keeping vulnerability)
$page = isset($_GET['page']) ? $_GET['page'] : '';

// Debugging: Check the value of the 'page' parameter
echo "<p>Requested page: " . htmlspecialchars($page) . "</p>"; // Debugging output

// Check if page is set, then include the file without adding .php extension
if ($page) {
    // Debugging: Log the file inclusion process
    echo "<p>Attempting to include: " . $page . "</p>";
    include($page); // Do not add .php extension here
} else {
    // Default page with posts and "Read More" links
    echo "<h2>Welcome to the Blog</h2>";
    echo "<div class='post-box'>";
    echo "<h3>Post 1: Welcome to My Website!</h3>";
    echo "<p>This is a simple intro. <a href='?page=post1'>Read More...</a></p>";
    echo "</div>";

    echo "<div class='post-box'>";
    echo "<h3>Post 2: How to Hack PHP?</h3>";
    echo "<p>Learn PHP security. <a href='?page=post2'>Read More...</a></p>";
    echo "</div>";

    echo "<div class='post-box'>";
    echo "<h3>Post 3: Local File Inclusion Vulnerability</h3>";
    echo "<p>Learn about LFI. <a href='?page=post3'>Read More...</a></p>";
    echo "</div>";
}
?>
