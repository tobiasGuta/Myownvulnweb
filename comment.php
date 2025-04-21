<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $comment = $_POST['comment'];

    // Normalize line endings & remove trailing whitespace
    $comment = trim($comment);

    // Save to comments.txt as-is
    file_put_contents("comments.txt", $comment . "\n", FILE_APPEND);

    echo "Comment submitted! <a href='comments.php'>View comments</a>";
    echo "Your comment has been submitted and is waiting for admin approval.";

}
?>

<h2>Leave a Comment</h2>
<form method="POST">
    <textarea name="comment" rows="4" cols="50" placeholder="Write something..."></textarea><br>
    <input type="submit" value="Submit">
</form>
