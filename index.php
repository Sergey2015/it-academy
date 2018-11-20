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
//
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

$str = 'При выполнении программы 55567 байт-код интерпретируется исполняющей машиной Java. Один и тот же Java-байткод 1111 будет исполняться на любой платформе. Переносимость. Архитектурная независимость - лишь 5354 составная часть переносимости. В отличие от С или С++ в Java не существует понятия "зависимости от реализации", когда речь идет о размерности базовых типов.
 Один два, три...
 Четыре пять и шесть. ';

//получаем абзацы
$str = explode("\n", $str);
echo "<br /><br /><br />Количество абзацев - ".count($str)."<br />";


foreach ($str as $key => $value) { //перебираем абзацы

	$str[$key] = explode(". ", $value); //Делим на предложения
	foreach ($str[$key] as $key2 => &$partsOfSentences) { //перебираем предложения
		echo "<br />?????$value<br />";
		if (empty($partsOfSentences)) { //пустые предложения удаляем
			//echo "!!!!$value";
			unset($str[$key][$key2]);
			//unset($value2);
		}
	//Создаем массив из предлоений разделенный пробелами
		//print_r($str[$key][$key2]);

	//$partsOfSentences[] = explode(" ", $value2); //разбиваем предложения пробелами
		$partsOfSentences = explode(" ", $partsOfSentences); //разбиваем предложения пробелами

		//print_r($str[$key]);
$k = 0;
do {
	//echo "ok";

//	$str[$key][$k] = explode(" ", $str[$key][$k]);
//defineWord(range(0, 9), $str[$key][$k]);
	//вызываем функцию разделить на символы
$aaa[] = makeArrayFromSentense($partsOfSentences);
	$k++;
} while (next($partsOfSentences));

}

	}
	echo "Количество предложений в абзаце номер ".($key+1)." - ".count($str[$key])."<br />";

 var_dump($str);

function defineWord (array $allowChar, string $sentence) {
echo "define work";


//var_dump($sentence);

//explode(" ", $sentence);

}





function makeArrayFromSentense (array $partsOfSentences) {
	$i = 0;
	$aaa[]="";
	foreach ($partsOfSentences as $key => $value) {
//echo "$value -----7777777<br />";
while (mb_strimwidth("$value", $i, 1)) {
	$aaa[] = mb_strimwidth($value, $i, 1);
	$i++;

}
$i = 0;
}
return  $aaa;
}
$word = "";
foreach ($is_word as $key => $value) {
	echo "$value<br />";
	foreach ($aaa as  $aaa2) {


	for ($i=0; $i < count($aaa2) ; $i++) {
		if ($value==$aaa2[$i]) {
			$word .= $aaa2[$i];
		//	echo "$aaa2[$i]<br />";
		}
		}
	}
}

//echo count($aaa2);
//var_dump($word);
//var_dump($str);
var_dump($str);
//var_dump($partsOfSentences);
