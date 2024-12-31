</html>
<!DOCTYPE html> 
<head> 
<title>Session 2</title> 
</head> 
<body> 
<?php 
// Starting a session 
session_start(); 
// Setting session variables 
$_SESSION["username"] = "JohnDoe"; 
$_SESSION["user_id"] = 123; 
// Retrieving and displaying session variables 
echo "Username: " . $_SESSION["username"] . "<br>"; 
echo "User ID: " . $_SESSION["user_id"] . "<br>"; 
// Destroying the session 
session_destroy(); 
?> 
</body> 
</html>