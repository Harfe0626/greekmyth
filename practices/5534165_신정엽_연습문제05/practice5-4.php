<?php
	echo "<table border=1>";
	echo "<tr align=center>";
	echo "<th width=100>2단</th>";
	echo "<th width=100>3단</th>";
	echo "<th width=100>4단</th>";
	echo "<th width=100>5단</th>";
	echo "<th width=100>6단</th>";
	echo "<th width=100>7단</th>";
	echo "<th width=100>8단</th>";
	echo "<th width=100>9단</th>";
	echo "</tr>";

	for($i=0; $i<=9; $i++) // $i<=9
		for($j=0; $j<=9; $j++) // $j<=9
			$result[$i][$j] = ($i+2) * ($j+1);
	
	for($j=0; $j<=8; $j++) 
    {
		echo "<tr align=center>"; 
		for($i=0; $i<=7; $i++) 
        {
			$a = $i + 2; 
			$b = $j + 1;
			$c = $result[$i][$j]; // $result
			echo "<td>$a x $b = $c</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
?>