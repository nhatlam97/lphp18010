<?php 
$a = 3;
$b = 4;
$c =4;
$dientich = $a*$b*$c;
if ($a+$b>$c  && $a+$c>$b && $b+$c>$a) {
	echo "a,b,c là 3 cạnh tam giác và có diện tích là:$dientich ";
}
elseif ($a=$b || $b=$c || $a=$c) {
	echo "là tam giac cân";
}
else{
	echo "không là 3 cạnh";
}
 ?>
