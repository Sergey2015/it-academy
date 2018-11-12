<?php

//Задача 1
//Синтаксис 1
echo "<table><tr><th>Число</th><th>Квадрат числа</th><th>Куб числа</th></tr>";
$n = 10;

for ($i=2; $i < $n+2 ; $i++) { 
	
	$pow2 = $i*$i;
	$pow3 = pow($i, 3);
	echo "<td style='text-align: center;'>$i</td>";
	echo "<td style='text-align: center;'>$pow2</td>";
	echo "<td style='text-align: center;'>$pow3</td>";
	echo "</tr>";
}
echo "</table>";
//Синтаксис 2
echo "<table><tr><th>Число</th><th>Квадрат числа</th><th>Куб числа</th></tr>";
for ($i=2; $i < $n+2 ; $i++) : ?> 
	<tr>
		<td style="text-align: center;"><?=$i ?></td>
		<td style="text-align: center;"><?=$i*$i ?></td>
		<td style="text-align: center;"><?=pow($i, 3); ?></td>
	</tr>
<? endfor;

echo "</table>";

//Задача 2
//Часть 1
echo "Часть 1";
$n = 21;
$numberOfColums = 5;
$numberOfLines = 3;
$counter = 1;
echo "<table>";
while ($counter<=$n) {
		
	echo "<tr style='background-color:".($counter%2?"#fff":"#ccc")."'>";
	for ($j=0; $j < $numberOfColums ; $j++) { 
	echo "<td style='border:1px solid';>".($counter<=$n?$counter:'')."</td>";
	$counter++;
	}
	echo "</tr>";
}
echo "</table>";

//Часть 2
$sum = 0;
echo "<br />Часть 2";
$n = 21;
$numberOfColums = 5;
echo "<br />";
echo $numberOfLines = ceil($n/$numberOfColums);
$counter=1;
echo "<br />";
//$counter = 1;
echo "<table>";

for ($i = 0 ; $i < $numberOfLines ; $i++) {
	echo "ok";
	echo "<tr style='background-color:".($i%2?"#fff":"#ccc")."'>";
	for ($j=1 ; $j <= $numberOfColums ; $j++) { 
//	echo "<td style='border:1px solid';>".($j==0?$i+1:$sum=$sum+$i+$numberOfLines)."</td>";
	echo "<td style='border:1px solid';>".($counter<=$n?($j*$numberOfLines-($numberOfLines-($i+1))):'')."</td>";
	echo $counter++;
	}
	
	echo "<br />";
	echo "</tr>";
}
echo "</table>";

echo "<br />";
//Задача 3
//Часть 1
$p = 10;

$s = 100;

$years = 5;

for ($i=1; $i <= 5; $i++) { 

	 
		 $s += $s*$p/100;
		 round($s,2);
		echo "<br />";
	
	echo "Сумма вклада за год №$i - ".round($s,2)."<br/>";
}


//Часть 2
echo "<br />Часть 2<br />";
$p = 20/12;

$s = 100;

$years = 5;

for ($i=1; $i <= 5; $i++) { 

	for ($j=1; $j <=12 ; $j++) { 
		 $s += $s*$p/100;
		echo round($s,2);
		echo "<br />";
	}
	echo "Сумма вклада за год №$i - ".round($s,2)."<br/>";
}











