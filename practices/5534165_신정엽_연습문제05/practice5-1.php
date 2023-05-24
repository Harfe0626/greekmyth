<?php 
    $score = array(87, 76, 98, 87, 87, 93, 79, 85, 88, 63); // array
	$sum = 0;
	for($i=0; $i<10; $i++) // $i<10
		$sum = $sum + $score[$i]; // $sum  // $i

	$avg = $sum/10; // $sum
	echo "입력된 점수 : ";

	for($i=0; $i<10; $i++) 
		echo $score[$i]." "; // $score[$i]

	echo "<br>";
	echo("합계 : $sum, 평균 : $avg");
?>