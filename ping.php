<?php
if (isset($_GET['host'])) {
    $host = $_GET['host'];
    echo "<pre>";
    system("ping -c 1 " . $host);
    echo "</pre>";
}
?>

<h2>Ping a Host</h2>
<form method="GET">
    Host: <input type="text" name="host" placeholder="127.0.0.1">
    <input type="submit" value="Ping">
</form>
