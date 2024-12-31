<?php
    $num = 5;
    $fact = 1; 
    if($num == 0 || $num == 1){
        $fact = 1;
        echo "Factorial of $num is $fact";
    }
    else{
        for ($i = 1; $i <= $num; $i++) { 
            $fact = $fact * $i; 
        }
        echo "Factorial of $num is $fact";
    }
?>
