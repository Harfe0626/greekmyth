<?php
    $count = 0;

    for($num=100; $num<=500; $num++)  //$num<=500
    {
        if($num%2 == 0)
        {
            echo "$num ";  //echo
            $count++;
        }

        if($count%2 == 0)  //$count%2
            echo "<br>";
    }
?>