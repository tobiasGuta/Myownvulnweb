<?php
// vulnerable_xss.php (Main menu)

echo "
<html>
<head><title>XSS Challenge Menu</title></head>
<body>
    <h1>Choose your XSS challenge level:</h1>
    <ul>
        <li><a href='vulnerable_xss2.php'>Challenge 1: Basic Reflected XSS</a></li>
        <li><a href='vulnerable_xss3.php'>Challenge 2: Reflected XSS via URL Parameters</a></li>
        <li><a href='vulnerable_xss4.php'>Challenge 3: Stored XSS</a></li>
        <li><a href='vulnerable_xss5.php'>Challenge 4: Persistent XSS with Cookies</a></li>
        <li><a href='vulnerable_xss6.php'>Challenge 5: HTML Injection XSS</a></li>
    </ul>
</body>
</html>
";
?>
