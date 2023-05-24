<?php 
    $score = 90;                        //$score
    echo "시험 점수 : {$score}점<br>";

    if ($score>=90 && $score<=100)      //&&
        echo "등급 : 수";
    else if ($score>=80 && $score<=89)
        echo "등급 : 우";
    else if ($score>=70 && $score<=79)
        echo "등급 : 미";
    else if ($score>=60 && $score<=69)  //else if
        echo "등급 : 양";
    else if ($score>=0 && $score<=59)
        echo "등급 : 가";
    else                                //else
        echo "점수를 잘못 입력하셨습니다.";
?>