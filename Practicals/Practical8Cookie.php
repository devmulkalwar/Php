<!DOCTYPE html> 
<html>
<head> 
<title>Session 1</title> 
</head> 
<body> 
<?php 
// Setting a cookie 
$cookie_name = "user"; 
$cookie_value = "John Doe"; 
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // Cookie will expire in 30 days 
// Retrieving and displaying cookie value 
if (isset($_COOKIE[$cookie_name])) { 
echo "Cookie '" . $cookie_name . "' has the value: " . $_COOKIE[$cookie_name]; 
} else { 
echo "Cookie named '" . $cookie_name . "' is not set."; 
} 
?> 
</body>
</html>

