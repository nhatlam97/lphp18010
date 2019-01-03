<?php 
	echo "Xin chào<br>";
	// biến trong php
	$number = "123";
	echo "giá trị của số là: $number<br>"; ;
	$number1 = 123;
	$number2 = 3456;
	$string1 = "Lưu";
	$string2  = "Nhất";
	$string3  = "Lâm";
	$sum1 = $number1 + $number2;
	// Array
	$array = [1,2,3,4,'abc'];
	echo "Gía trị thứ 3 của dãy:".$array[3];
	echo "<br>";
	echo "$sum1<br>";

	// Tham trị
	$so1 = 123;
	echo "$so1<br>";

	// Tham chiếu
	$so2 = &$so1;
	echo "$so1 $so2<br>";
	$so2 = 300.5;
	echo "$so1 $so2<br>";

	// đổi kiểu dữ liệu
	echo (integer)$so2;
	echo "<br>";

	// hằng

	define("pi", 3.14);
	echo "giá tri của số PI là:".pi;
 ?>