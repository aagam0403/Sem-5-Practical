<?php
session_start();
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}
$_SESSION['counter']++;
echo "<h2>You have refreshed this page ".$_SESSION['counter']." times.</h2>";
?>