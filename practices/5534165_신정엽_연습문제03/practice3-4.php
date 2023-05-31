<?php
    $buy = 80000;

    if ($buy>=10000 && $buy<50000)   //if
        $rate = 5.0;
    else if ($buy>=50000 && $buy<300000)
        $rate = 7.5;
    else if ($buy>=300000)  //else if
        $rate = 10.0;
    else   
        $rate = 0;

    $discount = $buy * $rate / 100;  //$discount
    $pay = $buy - $discount;

    echo "구매액 : {$buy}원<br>";
    echo "할인율 : {$rate}%<br>";  //$rate
    echo "할인금액 : {$discount}원<br>";
    echo "지불액 : {$pay}원";  //$pay
?>