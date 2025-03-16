<?php
// vulnerable_xss4.php (Challenge 3: Stored XSS)

session_start(); // Start a session to store comments

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['comments'][] = $_POST['comment'];
}

$comments = isset($_SESSION['comments']) ? $_SESSION['comments'] : [];

echo "
<html>
<head><title>Stored XSS</title></head>
<body>
    <h1>Leave a Comment</h1>
    <form method='POST'>
        <input type='text' name='comment' required>
        <button type='submit'>Submit</button>
    </form>
    <h2>Stored Comments:</h2>
    <ul>
";

foreach ($comments as $comment) {
    echo "<li>{$comment}</li>"; // Directly displaying the comment (XSS vulnerability)
}

echo "
    </ul>
</body>
</html>
";
?>
