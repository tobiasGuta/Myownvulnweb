<?php
// welcome.php - After login, this page will welcome the user

session_start(); // Start the session to check login status

if (!isset($_SESSION['username'])) {
    echo "You must log in first. <a href='login.php'>Login</a>";
    exit();
}

echo "<h1>Welcome, " . htmlspecialchars($_SESSION['username']) . "!</h1>";
echo "<p>You are logged in. This page is only accessible after successful login.</p>";
?>
