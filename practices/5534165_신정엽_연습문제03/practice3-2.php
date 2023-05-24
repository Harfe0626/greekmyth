<?php
    $month = 12;

    if ($month>=3 && $month<=5) //&&
    {
        $season = '봄';
        echo "{$month}월은 {$season}입니다.";
    }
    else if ($month>=6 && $month<=8) //else if
    {
        $season = '여름';
        echo "{$month}월은 {$season}입니다.";
    }
    else if ($month>=9 && $month<=11) //else if
    {
        $season = '가을';
        echo "{$month}월은 {$season}입니다.";
    }
    else if ($month==12 || $month==1 || $month==2) // ||
    {
        $season = '겨울';
        echo "{$month}월은 {$season}입니다.";
    }
    else 
    {
        echo "잘못 입력되었습니다!";
    }
    ?>