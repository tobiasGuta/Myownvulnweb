<?php
$db = new SQLite3('sqli/users.db');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    
    // 🔥 VULNERABLE TO SQLi
    $query = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
    $result = $db->query($query);

    if ($result && $result->fetchArray()) {
        echo "<h2>Welcome, $user!</h2>";
        echo "<p>Flag: CTF{sqli_bypassed_auth}</p>";
    } else {
        echo "<p>Login failed.</p>";
    }
}
?>

<h2>Login (SQLi vulnerable)</h2>
<form method="POST">
  Username: <input name="username"><br>
  Password: <input name="password" type="password"><br>
  <input type="submit" value="Login">
</form>
