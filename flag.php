<?php
if ($_COOKIE['role'] === 'admin') {
    echo "CTF{you_stole_the_admin_cookie}";
} else {
    echo "Access denied. Admins only.";
}
?>

