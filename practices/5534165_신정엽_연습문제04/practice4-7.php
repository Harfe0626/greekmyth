<?php
    echo "-----------------------<br>";
    echo "야드 미터<br>";
    echo "-----------------------<br>";

    for($yard=10; $yard<=300; $yard=$yard+10)  //10    //$yard+10
    { 
        $meter = $yard * 0.9144;  //$meter
        echo "$yard $meter<br>";
    }
    echo "-----------------------<br>";
?>