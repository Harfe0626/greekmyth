<?php
    echo "시간당 급여<br>";
    echo "-주간 근무 : 9,500원<br>";
    echo "-야간 근무 : 주간 시급 * 1.5<br><br>";

    $hour_rate = 9500;

    $day_night = "주간";                //$day_night
    $work_time = 8;

    if($day_night == "주간")
    {
        $pay = $hour_rate * $work_time;
    }
    else{                              //else
        $hour_rate * $work_time * 1.5;
    }

    echo "$work_time 시간 동안 일한 $day_night 급여는 $pay 원입니다."; //$day_night
?>