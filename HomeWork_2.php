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
echo "Задача 2. Часть 1";
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
$n = 3;
$numberOfColums = 5;
echo "<br />";
$numberOfLines = ceil($n/$numberOfColums);
echo "<br />";
echo "<table>";
for ($i = 0 ; $i < $numberOfLines ; $i++) {
	
	
	
	echo "<tr style='background-color:".($i%2?"#fff":"#ccc")."'>";
	for ($j=0 ; $j < $numberOfColums ; $j++) { 


	echo "<td style='border:1px solid';>".($i+$j*$numberOfLines<$n?($i+$j*$numberOfLines+1):'')."</td>"; 
	 $counter++;
	}
	
	echo "<br />";
	echo "</tr>";
	$flag=true;
}
echo "</table>";

echo "<br />";



//Задача 3
//Часть 1
echo "Задача 3. Часть 1";
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
echo "<br />Задача 3. Часть 1<br />";
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




//Доп. задание. Массивы


//$menu = ["element1" => array("title","ref1.php", array())]
echo "<br />";

$menu2 = array(
	array("title" => "Элемент1", "link" => "ref1.php", array(
		"title" => "Элемент4", "link" => "ref2.php", array(
			"title" => "Элемент9",  "link" => "ref3.php",array(), array("title" => "Элемент10",  "link" =>"ref3.php",array())))),

	array("title" => "Элемент2", "link" => "ref1.php", array(
		"title" => "Элемент4", "link" => "ref2.php", array(
			"title" => "Элемент9",  "link" => "ref3.php",array(), array("title" => "Элемент10",  "link" =>"ref3.php",array()))))
);
//print_r($menu);
$menu = 
[
   ['Элемент1', 'ref1.php', [
                               ['Элемент4', 'ref1-4.php', [
                                                           ['Элемент9', 'ref1-4-9.php', [] //вложенный массив пуст
                                                           ],
                                                           ['Элемент10', 'ref1-4-10.php', []
                                                           ]
                                                        ]
                               ],
                               ['Элемент5', 'ref1-5.php', []
                               ]
                            ]
   ],
  



  ['Элемент2', 'ref2.php', [
                               ['Элемент6', 'ref2-6.php', []
                                                           
                                                        
                               ],
                               ['Элемент7', 'ref2-7.php', 	[
                               								['Элемент11', 'ref2-7-11.php', [] //вложенный массив пуст
                                                           ],
                                                           ['Элемент12', 'ref2-7-12.php', []
                                                           ]
                                                       		]
                               ]
                            ]
   ],

   ['Элемент3', 'ref3.php', [
                               ['Элемент8', 'ref3-8.php', [
                                                           ['Элемент13', 'ref3-8-13.php', [] //вложенный массив пуст
                                                           ],
                                                           ['Элемент14', 'ref3-8-14.php', []
                                                           ],
                                                           ['Элемент15', 'ref3-8-15.php', []
                                                           ]
                                                        ]
                               ]
                            ]
   ]
  
  
 
];



 for ($i=0; $i < count($menu) ; $i++) { 
	//print_r($menu[$i][0]);
	if ($menu[$i][2]) {
		
		for ($j=0; $j < count($menu[$i][2]) ; $j++) { 
			//print_r($menu[$i][2][$j][0]);

			for ($k=0; $k < count($menu[$i][2][$j][2]) ; $k++) { 
			//print_r($menu[$i][2][2][0]);
		}
		}
	}
 }

function chekArray ($array2) {
	$counter=0;
foreach ($array2 as $key => $value) {
	if (is_array($value)) {
	//	echo "array";
	//	echo "key= ".$key;
	
		chekArray ($value);
	}
	else {// echo "no array";
	if ($key==0) {
	echo $value."<br />";
	}
	
	//var_dump($value);
}
}

	//print_r($array2);
}

chekArray ($menu);
	
//var_dump($menu);















