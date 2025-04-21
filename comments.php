<?php

if (!isset($_COOKIE['role']) || $_COOKIE['role'] !== 'CTF{script_kiddie_got_lucky}') {
    http_response_code(403);
    echo "<h1>403 Forbidden</h1>";
    exit;
}

header('Content-Type: text/html; charset=UTF-8');

$comments = file_get_contents("comments.txt");

echo "<h2>Public Comments</h2>";
echo $comments; // RAW output — this will execute <script> tags
?>
