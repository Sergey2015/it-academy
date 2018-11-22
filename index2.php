<?php
$text = file_get_contents('text_windows1251.txt');//Считываем полный текст файла в переменную $text


//$text = mb_convert_encoding($text, "UTF-8",  "Windows1251");
$text = iconv("Windows-1251", "UTF-8", $text);
echo "$text";
//Выполняем задание (при разбивке по абзацам учтите, что в Windows1251 абзацы разделяются через "\r\n")

//
$space = array(" "); 
$rus=array('А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я','а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я',' ');
$is_word = array_merge(range(0, 9), range("a", "z"), range("A", "Z"), $rus, $space);
print_r($is_word);
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

$str = ' FOR for При выполнении программы 55567 байт-код интерпретируется исполняющей машиной Java. Один и тот же Java-байткод 1111 будет исполняться на любой платформе. Переносимость. Архитектурная независимость - лишь 5354 составная часть переносимости. В отличие от С или С++ в Java не существует понятия "зависимости от реализации", когда речь идет о размерности базовых типов.
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
  $bbb = makeArrayFromSentense($value, $is_word);

				
			}
			
			
		}
		
	//	 echo "Количество слов в предложении - ".count(explode(" ", $words))."<br />";
	//	echo("<br />Сдеующее предложение");


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
function makeArrayFromSentense ( $partsOfSentences, $is_word) {
	$words = "";
	$i = 0;
	$aaa[]="";

for ($i=0; $i < mb_strlen($partsOfSentences); $i++) {

$symbol = mb_strimwidth("$partsOfSentences", $i, 1); //mb_substr
//var_dump($symbol);


$aaa[] = $symbol;
//$words_count = 0;
foreach ($is_word as $validSymbol) {
	if ((string)$symbol == (string)$validSymbol) {
	//	echo "symbol - $symbol, validSymbol - $validSymbol<br />";
		//$words[] = $symbol;
		//$words = implode($words);
		$words .= $symbol; 
//var_dump($words);
	}		

}

}
$words .= " ";
 print_r($words);

$aaa = array_diff($aaa, array(''));
//var_dump($aaa);

return  array($words, $aaa);
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



// Инициализирую массив допустимых символов и текст
// Текст преобразую в UTF-8
// создаю функцию, кторая разбивает текст на абзацы. Принимает текст, возвращает массив абацев
// создаю функцию, кторая разбивает абзац на предложения. Принимает абзац, возвращает массив абзацев
// создаю функцию, кторая разбивает предложения на куски (разделитель - пробел). принимает предложение, возвращает массив частей предложения, включая недопустимые символы
// создаю функцию, кторая разбивает части предложения, включая недопустимые символы на слова. принимает части предложения, возвращает массив слов с валидными символами
// 
// Создаю основную функцию, где будут лежать все вышеперечисленные функции
// Вывод количества  предложений, слов, символов для каждого абзаца будет осуществляться подсчетом элементов возвращаемых массивов.
// Выделяем жирным первую букву предложений функцией str_replace
// вот еще 
// if (!function_exists("mb_str_replace")) 
{
    function mb_str_replace($needle, $replace_text, $haystack) {
        return implode($replace_text, mb_split($needle, $haystack));
    }
}

$str = 'привет ВАНЯ';
echo mb_str_replace('ваня', 'петя', $str);
