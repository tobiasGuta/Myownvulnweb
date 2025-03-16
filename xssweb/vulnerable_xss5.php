<?php
// vulnerable_xss5.php (Challenge 4: Persistent XSS with Cookies)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("user_comment", $_POST['comment'], time() + (86400 * 30), "/"); // Set a cookie that lasts 30 days
    $comment = $_POST['comment'];
} else {
    $comment = isset($_COOKIE['user_comment']) ? $_COOKIE['user_comment'] : '';
}

echo "
<html>
<head><title>Persistent XSS with Cookies</title></head>
<body>
    <h1>Leave a Comment</h1>
    <form method='POST'>
        <input type='text' name='comment' required>
        <button type='submit'>Submit</button>
    </form>
    <h2>Your Comment (Stored in Cookie):</h2>
    <p>{$comment}</p>
</body>
</html>
";
?>
