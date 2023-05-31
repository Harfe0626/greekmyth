<?php
    $sum = 0;

    for($num=100; $num<=900; $num++)  //$num++
    {
        if($num%3 != 0)            //!=
            $sum = $sum + $num;
            echo "{$num}까지의 합 : $sum<br>";   //$num
    }
?>