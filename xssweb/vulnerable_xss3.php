<?php
// vulnerable_xss3.php (Challenge 2: Reflected XSS via URL Parameters)

$comment = isset($_GET['comment']) ? $_GET['comment'] : '';

echo "
<html>
<head><title>Reflected XSS via URL Parameters</title></head>
<body>
    <h1>Leave a Comment</h1>
    <form method='GET' action='vulnerable_xss3.php'>
        <input type='text' name='comment' required>
        <button type='submit'>Submit</button>
    </form>
    <h2>Your Comment (from URL):</h2>
    <p>{$comment}</p>
</body>
</html>
";
?>
