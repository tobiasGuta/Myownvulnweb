<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $target = "uploads/" . basename($_FILES["file"]["name"]);
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target)) {
        echo "Uploaded to: <a href='$target'>$target</a>";
    } else {
        echo "Upload failed.";
    }
}
?>
<h2>Upload a PHP Webshell</h2>
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Upload">
</form>
