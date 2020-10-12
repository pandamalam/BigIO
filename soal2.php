<?php
function f($n)
{
for ($i = $n; $i > 0; $i--){
	for($j = $n; $j > $i; $j-- ){
		echo " ";
	}
	for($k = 0; $k < $i; $k++ ){
		echo "* ";
	}
	echo "\n";
}
for ($i = 1; $i < $n; $i++)
{
	for($j = $n-1; $j > $i; $j-- ){
		echo " ";
	}
	for($k = 0; $k <= $i; $k++ ){
		echo "* ";
	}
	echo "\n";
}
}
f(3);
?>