<?php
$text = file_get_contents('text_windows1251.txt');//Считываем полный текст файла в переменную $text


//$text = mb_convert_encoding($text, "UTF-8",  "Windows1251");
$text = iconv("Windows-1251", "UTF-8", $text);
echo "$text";
//Выполняем задание (при разбивке по абзацам учтите, что в Windows1251 абзацы разделяются через "\r\n")

//

$is_word = array_merge(range(0, 9), range("a", "z"), range("A", "Z"));
//echo "ok";
//var_dump($array);
//
//Делим на абзацы

//Делим на предложения
// $text = explode("\n", $text);
// $i = 0;
// // foreach ($text as &$paragraph) {
// // 	}
// 	foreach ($text as $key => $sentences) {
// explode(". ", $sentences);
// 	for ($i=0; $i < count($text); $i++) {
// 		$text[$key][$i] = $sentences;
// 		echo "string";
// //	echo "$sentences<br />";
// 	}


// }
// var_dump($text);

$str = 'При выполнении программы 55567 байт-код интерпретируется исполняющей машиной Java. Один и тот же Java-байткод 1111 будет исполняться на любой платформе. Переносимость. Архитектурная независимость - лишь 5354 составная часть переносимости. В отличие от С или С++ в Java не существует понятия "зависимости от реализации", когда речь идет о размерности базовых типов. ';

$str = explode(". ", $str);


foreach ($str as $key => $value) {
	$str[$key] = explode("-", $value);
//print_r($str[$key]);
$k = 0;
do {
	echo "ok";

//	$str[$key][$k] = explode(" ", $str[$key][$k]);
//defineWord(range(0, 9), $str[$key][$k]);
$aaa[] = makeArrayFromSentense($str[$key][$k]);
	$k++;
} while (next($str[$key]));

}
 var_dump($str);

function defineWord (array $allowChar, string $sentence) {
echo "define work";


//var_dump($sentence);

//explode(" ", $sentence);

}





function makeArrayFromSentense (string $sentence) {
	$i = 0;
	$aaa[]="";
while (mb_strimwidth($sentence, $i, 1)) {
	$aaa[] = mb_strimwidth($sentence, $i, 1);
	$i++;
}
return  $aaa;
}




var_dump($aaa);

