<?php
// Set admin cookie for the bot
setcookie("role", "CTF{script_kiddie_got_lucky}", time() + 3600, "/");

// Redirect to comments.php so the cookie gets used
header("Location: /comments.php");
exit;

