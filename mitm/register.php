<?php
// register.php - Vulnerable registration page

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Simulating saving user data (In real-world scenarios, you should use a secure database)
    $username = $_POST['username'];
    $password = $_POST['password'];

    // For simplicity, let's just save these in a file (do not do this in production!)
    file_put_contents("users.txt", "$username:$password\n", FILE_APPEND);

    echo "Registration successful! You can <a href='login.php'>login</a> now.";
} else {
    echo '
    <h2>Register</h2>
    <form method="POST">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <button type="submit">Register</button>
    </form>';
}
?>
