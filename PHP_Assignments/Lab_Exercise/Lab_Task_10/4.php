<?php
// Start of page load
if (!isset($_COOKIE['user'])) {
    setcookie("user", "JohnDoe", time() + 86400); 
    $message = "Cookie 'user' has been created.";
} 
elseif (isset($_COOKIE['user'])) {
    $message = "Cookie value: " . $_COOKIE['user'];
    setcookie("user", "", time() - 3600); 
    $message .= "<br>Cookie 'user' has now been deleted.";
}
?>
<html>
<body>
<h2><?php echo $message; ?></h2>
</body>
</html>