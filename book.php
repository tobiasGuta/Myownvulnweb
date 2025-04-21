<?php
if (isset($_GET['postid'])) {
    include("posts/" . $_GET['postid']);
} else {
    include("posts/1.php");
}
?>
