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

$str = ' При выполнении программы 55567 байт-код интерпретируется исполняющей машиной Java. Один и тот же Java-байткод 1111 будет исполняться на любой платформе. Переносимость. Архитектурная независимость - лишь 5354 составная часть переносимости. В отличие от С или С++ в Java не существует понятия "зависимости от реализации", когда речь идет о размерности базовых типов.
 Один два, три...
 Четыре пять и шесть. ';

//получаем абзацы
$str = explode("\n", $str);
echo "<br /><br /><br />Количество абзацев - ".count($str)."<br />";


foreach ($str as $key => $sentence) { //перебираем абзацы

	$sentence = explode(". ", $sentence); //Делим на предложения
	foreach ($sentence as $key2 => &$partsOfSentences) { //перебираем предложения
		//echo "<br />?????$value<br />";
		if (empty($partsOfSentences)) { //пустые предложения удаляем

			unset($sentence[$key2]);

		}
	//echo "$partsOfSentences<br />";
		$partsOfSentences = explode(" ", $partsOfSentences); //разбиваем предложения пробелами
		foreach ($partsOfSentences as $value) {
			if ($value != null) {
//echo "$value<br />";
				makeArrayFromSentense($value, $is_word);
			}
		}


		//print_r($str[$key]);
$k = 0;
// do {
// 	//вызываем функцию разделить на символы
// $aaa[] = makeArrayFromSentense($partsOfSentences);
// 	$k++;
// } while (next($partsOfSentences));

}


	echo "Количество предложений в абзаце номер ".($key+1)." - ".count($sentence)."<br />";
}
 //var_dump($str);

function defineWord (array $allowChar, string $sentence) {
echo "define work";


//var_dump($sentence);

//explode(" ", $sentence);

}




//функция разбиения на символы
function makeArrayFromSentense (string $partsOfSentences,array $is_word) {
	$i = 0;
	$aaa[]="";

		//echo "$partsOfSentences<br />";
		$symbol = mb_strimwidth("$partsOfSentences", $i, 1);
while (mb_strimwidth("$partsOfSentences", $i, 1)) {
echo $partsOfSentences;
	$aaa[] = $symbol;
	//echo "$i";
foreach ($is_word as $validSymbol) {
	if ($symbol==$validSymbol) {
	//	echo "symbol - $symbol, validSymbol - $validSymbol<br />";

	}

}
$i++;


}
$i = 0;
$aaa = array_diff($aaa, array(''));
//var_dump($aaa);



return  $aaa;
}


// $word = "";
// foreach ($is_word as $key => $value) {
// 	//echo "$value<br />";
// 	foreach ($aaa as  $aaa2) {


// 	for ($i=0; $i < count($aaa2) ; $i++) {
// 		if ($value==$aaa2[$i]) {
// 			$word .= $aaa2[$i];
// 		//	echo "$aaa2[$i]<br />";
// 		}
// 		}
// 	}
// }

//echo count($aaa2);
//var_dump($word);
//var_dump($str);
//var_dump($str);
//var_dump($partsOfSentences);
//var_dump($aaa);

