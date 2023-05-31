<?php 
//Q. 다음은 거스름돈을 계산하는 프로그램이다. 빈칸을 채워 프로그램을 완성하시오.

//A. 
echo "Q14. 다음은 거스름돈을 계산하는 프로그램이다. 빈칸을 채워 프로그램을 완성하시오.<br>";
$money = 3000;
$price = 800;
$num = 3;

$change = $money - $price * $num; // $money

echo("물건 가격 : $price <br>");
echo("구매 개수 : $num <br>"); // $num
echo("지불액 : $money <br>");
echo("거스름돈은 $change 원 입니다. <br>"); // $change
?>