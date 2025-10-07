<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: 1_1.php");
    exit;
}
echo "<h2>Welcome, " . $_SESSION['username'] . "!</h2>";
echo '<a href="1_3.php">Logout</a>';
?>
