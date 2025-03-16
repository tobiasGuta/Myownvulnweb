<?php
// login.php - Vulnerable login page

session_start(); // Start a session to store logged-in status

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the inputted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Read user credentials from the file (In real life, use a database and hashed passwords)
    $users = file("users.txt", FILE_IGNORE_NEW_LINES); // Read all lines from users.txt
    foreach ($users as $user) {
        list($stored_username, $stored_password) = explode(":", $user);
        
        // If credentials match, set a session variable
        if ($username === $stored_username && $password === $stored_password) {
            $_SESSION['username'] = $username;
            header('Location: welcome.php');
            exit();
        }
    }
    echo "Invalid credentials. Try again.";
} else {
    echo '
    <h2>Login</h2>
    <form method="POST">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>';
}
?>
