<?php
$day = "Tuesday";

switch ($day) {
    case "Monday":
        echo "Start of the work week!";
        break;
    case "Tuesday":
        echo "Second day of the week.";
        break;
    case "Wednesday":
        echo "Midweek day!";
        break;
    case "Thursday":
        echo "Almost the weekend!";
        break;
    case "Friday":
        echo "Last workday of the week!";
        break;
    case "Saturday":
        echo "Weekend is here!";
        break;
    case "Sunday":
        echo "Enjoy your day of rest!";
        break;
    default:
        echo "Invalid day!";
}
?>
