<?php
/*
//Задача 1
echo 'Задача 1</br>';
$x = 1;
if ($x > 0) {
    $x = 1;
} elseif ($x < 0) {
    $x = -1;
} else {
    $x = 0;
}
echo "x=$x";

//Задача 2
echo '</br></br>Задача 2</br></br>';
$a = 4;
$b = 20;
$c = 30;
$min = ($a<$b && $a<$c)?$a : ($b<$a && $b<$c?$b:$c);
$max = ($a>$b && $a>$c)?$a : ($b>$a && $b>$c?$b:$c);

echo "</br>сумма ".($min+$max)."</br>";

//Задача 3
echo '</br>Задача 3</br>';
$a = 9;
$b = 2;
$c = 3;
$d = 4;


$ab = $a > $b ? $a : $b;
$cd = $c > $d ? $c : $d;
echo "Наибольшее число будет " . ($ab > $cd ? $ab : $cd);

//Задача 4
echo '</br></br></br>Задача 4';
$length_bag = 10;
$width_bag = 20;
$length_item = 5;
$width_item = 15;

if ($length_bag > $length_item) {
    if ($width_bag > $width_item) {
        echo '</br>ok. Длина и ширина сумки больше, чем товара. Входит и выходит :)';
    } else {
        echo 'Не прокатило. Хоть длина сумки и больше длины товара, но ширина сумки меньше, чем ширина товара. Попробуем перевернуть.';
        if ($width_bag > $length_item AND $length_bag > $width_item) {
            echo 'Перевернули и все получилось. Входит и выходит :)';
        } else {
            echo ' Не вышло. Товар не влазит';
        }
    }
} else {
    echo '</br>Длина торбочки меньше длины товара. Переворачиваем. ';
    if ($length_bag > $width_item AND $width_bag > $length_item) {
        echo 'Перевернули. Влазит и вылазит :)';
    } else {
        echo 'Нельзя впихнуть невпихуемое';
    }
}


//Задача 4. + Высота
echo '</br></br></br>Задача 4. +Высота';
$length_bag = 10;
$width_bag = 20;
$height_bag = 30;
$length_item = 5;
$width_item = 15;
$height_item = 20;

if (($length_bag > $length_item AND $width_bag > $width_item AND $height_bag > $height_item) OR ( $length_bag > $width_item AND $width_bag > $length_item AND $height_bag > $height_item) OR ( $length_bag > $height_item AND $width_bag > $width_item AND $height_bag > $length_item) OR ( $length_bag > $length_item AND $width_bag > $height_item AND $height_bag > $width_item)) {
    echo '</br>Входит и выходит :)';
} else {
    echo '</br>Нельзя впихнуть невпихуемое!';
}

//Дополнительные задачи
echo '</br>Дополнительные задания</br>';

//ЗАДАНИЕ 1
//
//- Создайте переменную $age
//
//- Присвойте переменной $age произвольное числовое значение
//
// 
//
//ЗАДАНИЕ 2
//
//- Напишите конструкцию if, которая выводит фразу: "Вам ещё работать и работать" при условии, что значение переменной $age попадает в диапазон чисел от 18 до 59(включительно)
//
//- Расширьте конструкцию if, выводя фразу: "Вам пора на пенсию" при условии, что значение переменной $age больше 59
//
//- Расширьте конструкцию if-else, выводя фразу: "Вам ещё рано работать" при условии, что значение переменной $age попадает в диапазон чисел от 1 до 17(включительно)
//
//- Дополните конструкцию if-elseif, выводя фразу: "Неизвестный возраст" при условии, что значение переменной $age не попадает в вышеописанные диапазоны чисел

$age = 60;
if ($age>18 && $age<=59) {
    echo '</br>Вам еще работать и работать</br>';
}
elseif ($age>59) {
    echo '</br>Вам пора на пенсию</br>';

}
elseif ($age>=1 && $age<=17) {
    
    echo '</br>Вам еще рано работать</br>';

}
 else {
    
    echo '</br>Неизвестный возраст</br>';
 }
*/
//  $s=0;
// $n=10;
// for ($i=1,$j=2; $i<$n; $i++, $j++) {
//     $s+= $i*$j;
//     echo "<br/>".$s;
// }


//  echo "<table>";
//     echo "<tr><th style='border:1px solid'>Номер</th><th style='border:1px solid'>Число</th></tr>";
//     for ($i=0;$i<10;$i++) {
// //$color="white";
//         if ($i%2) {
//             $color="#ccc";

//         } else $color="rgb(122, 128, 126)";
//         echo "<tr style='background-color:$color;'>";

//         for ($j=0; $j<2; $j++) { 


//  //   echo $j%2;
//            echo "<td style='border:1px solid'>";
//            $a = mt_rand();

//            echo "$a</td>";
//        }   
//        echo "</tr>";
//    }
//    echo "</table>";




//  echo "<table>";
//  $count=10;
//     echo "<tr><th style='border:1px solid'>Номер</th><th style='border:1px solid' colspan=$count>Число</th></tr>";
//     for ($i=0;$i<10;$i++) {
// //$color="white";
//         if ($i%2) {
//             $color="#ccc";

//         } else $color="rgb(122, 128, 126)";
//         echo "<tr style='background-color:$color;'>";

//         for ($j=0; $j<$count; $j++) { 


//  //   echo $j%2;
//            echo "<td style='border:1px solid'>";
//            $a = mt_rand();

//            echo "$a</td>";
//        }   
//        echo "</tr>";
//    }
//    echo "</table>";





//    echo "<table>";
//    $color1=255;
//    $color2=255;
//    $color3=255;
//    echo "<tr><th style='border:1px solid'>Номер</th><th style='border:1px solid'>Число</th></tr>";
//    while ($color1>=0) {
// //$color="white";

//     $color="rgb($color1, $color2, $color3)";


//     echo "<tr style='background-color:$color;'>";
// //echo " $color1 $color2 $color3";
//     $color1-=1;
//     $color2-=1;
//     $color3-=1;



//     for ($j=0; $j<2; $j++) { 


//  //   echo $j%2;
//        echo "<td style='border:1px solid'>";
//        $a = mt_rand();


//        echo "$a</td>";
//    }   
//    echo "</tr>";
// }
// echo "</table>";


//книга по алгоритмам Дональд Кнут "Искусство программирования"


// Пузырьковая сортировка

// $array = [8,3,5,1,0,0,7,9];
// $n = count($array);
// for ($i=0; $i <$n-1; $i++) { 
//     //echo "$n";
//     $counter = 0;
//     for ($j=$n-1; $j > $i ; $j--) { 
//         if ($array[$j]<$array[$j-1]) {

//             $temp = $array[$j];
//             $array[$j] = $array[$j-1];
//             $array[$j-1] = $temp;
//             $counter++;
//             echo "перестановка";
//         } 
//         echo "$counter<br />";
//     }
//     if ($counter==0) {
//         echo "нет перестановок";
//         break;
//     }
//     var_dump($array);
// }

// foreach ($array as $value) {
//     echo $value."<br />";
// }







//Задачка на GET. Пагинация

define('MP', 10);
$n = isset($_GET['n'])?intval($_GET['n']):100;

$page = isset($_GET['page'])?intval($_GET['page']):1;

for ($i=1; $i <=$n ; $i++) { 
    $array[] = "сообщение ".$i;
}

$firstElement = ($page - 1) * MP;
$pageArray = array_slice($array, $firstElement, MP);

foreach ($pageArray as $value) {
    echo $value."<br />";
}


?>







