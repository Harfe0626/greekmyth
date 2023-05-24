<?php 
//Q. HTML의 <table> 태그를 이용하여 4번 문제의 출력 결과를 다음과 같이 나타내시오.

//A.
    echo "Q5. HTML의 <table> 태그를 이용하여 4번 문제의 출력 결과를 다음과 같이 나타내시오.<br>";
	echo (
		"
		<html>
		<body>
		<table border = '1' 
		style=border-collapse:collapse;
		width = '500'>
		<tr align = 'left'>
		<td width '150'>이름</td>
		<td>휴대폰 번호</td>
		<td>주소</td>
		<td>이메일</td>
		"
	);
	echo (
		"
		<tr align = 'left'>
		<td width '150'>신정엽</td>
		<td>010-7127-1089</td>
		<td>대구 달서구 월서로</td>
		<td>strik241@gmail.com</td>
		"
	);
?>