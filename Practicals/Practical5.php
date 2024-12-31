<!DOCTYPE html>
<html>
<head> 
<title>Multiplication Table</title> 
</head> 
<body> 
<?php 
$start = 1; 
$end = 10;  
for ($i = $start; $i <= $end; $i++)
 { 
for ($j = 1; $j <= 10; $j++) 
{ 
$result = $i * $j; 
echo "$i x $j = $result\n"; 
} 
echo "\n"; 
} 
?> 
</body> 
</html>