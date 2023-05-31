<?php
    $num = 300;  //$num
    $sum = 0;    //$sum

    while($num<=3000)
    {
        if($num%2 == 1)  //1
            $sum = $sum + $num;  //$num

        $num++;
    }
    echo "300~3000 중 홀수의 합 : $sum";  //$sum
?>