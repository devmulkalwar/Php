<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Validate Login</title>
</head>
<body>
<?php
// PHP code to validate the login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Get form data
$username = $_POST["username"];
$password = $_POST["password"];
// Hard-coded username and password for demonstration purposes
$valid_username = "user123";
$valid_password = "password123";
// Validate the login credentials
if ($username == $valid_username && $password == $valid_password) {
echo "Login successful! Welcome, $username.";
} else {
echo "Invalid username or password. Please try again."; 
}
} else {
header("C:\xampp\htdocs\Php\Practicals\Practical9Form.php");
exit();
}
?>
</body>
</html> 