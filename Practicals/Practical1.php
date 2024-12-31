<!DOCTYPE html>
<html>
<body>
<?php 
$marks = 49;
if ($marks > 79) {
    echo "Grade: A";
} elseif ($marks > 60) {
    echo "Grade: B";
} elseif ($marks > 50) {
    echo "Grade: C";
} elseif ($marks == 50) {
    echo "Grade: D";
} else {
    echo "Grade: F";
}
?>
</body>
</html>