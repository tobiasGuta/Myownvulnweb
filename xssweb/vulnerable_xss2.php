<?php
// vulnerable_xss2.php (Challenge 1: Basic Reflected XSS)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment = $_POST['comment'];
} else {
    $comment = '';
}

echo "
<html>
<head><title>Basic Reflected XSS</title></head>
<body>
    <h1>Leave a Comment</h1>
    <form method='POST'>
        <input type='text' name='comment' required>
        <button type='submit'>Submit</button>
    </form>
    <h2>Your Comment:</h2>
    <p>{$comment}</p>
</body>
</html>
";
?>
