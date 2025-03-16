<?php
// vulnerable_xss6.php (Challenge 5: HTML Injection XSS)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment = $_POST['comment'];
} else {
    $comment = '';
}

echo "
<html>
<head><title>HTML Injection XSS</title></head>
<body>
    <h1>Leave a Comment</h1>
    <form method='POST'>
        <input type='text' name='comment' required>
        <button type='submit'>Submit</button>
    </form>
    <h2>Your Comment (HTML Injection):</h2>
    <p>{$comment}</p> <!-- HTML is directly injected here (XSS vulnerability) -->
</body>
</html>
";
?>
