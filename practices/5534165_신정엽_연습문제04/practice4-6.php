<?php
    $count = 0;

    for($num=1; $num<=500; $num++) //$num=1
    {
        if($num%5 == 0)  //$num%5
        {
            echo "$num ";

            $count++;

            if($count%10==0)  //$count%10
                echo "<br>";
        }
    }
?>