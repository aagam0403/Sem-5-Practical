<?php
session_start();
session_destroy();
header("Location: 1_1.php");
exit;
?>