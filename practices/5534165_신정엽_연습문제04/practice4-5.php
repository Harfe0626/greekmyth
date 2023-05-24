<?php 
    $fact = 1;
    for($num=1; $num<=10; $num++)
    {
        $fact *= $num;

        echo "{$num}! = $fact<br>";
    }
?>