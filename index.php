<?php

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
