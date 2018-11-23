<?php
$text = file_get_contents('text_windows1251_2.txt');//Считываем полный текст файла в переменную $text



$text = iconv("Windows-1251", "UTF-8", $text);
echo "$text";
$text = strip_tags($text);
$space = array(" ");
$rus=array('А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я','а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я',' ');
$is_word = array_merge(range(0, 9), range("a", "z"), range("A", "Z"), $rus, $space);
//print_r($is_word);




function getLastIncludeArrayElements ($array) {
foreach ($array as $key => $value) {
	if (is_array($value)) {
		getLastIncludeArrayElements ($value);
	}
	else {
	$value[] = $value;

}
}
return (array)$value;
}



function getParagraph (string $text) {

$paragraph = explode("\n", $text); //получаем абзацы
$paragraph = array_diff($paragraph, array(''));
return (array)$paragraph;
}

$getParagraph = getParagraph($text);
echo "<br /><b>Всего параграфов - ".count($getParagraph)."</b><br />";
//var_dump($getParagraph);

foreach ($getParagraph as $key => $value) {
	$sentences = getSentence($value) ;
	$sentences = array_diff($sentences, array(''));
	echo "<br /><b>Предложений в параграфе ".($key+1)." - ".count($sentences)."</b><br />";
	echo "<br /><b>Символов в параграфе ".($key+1)." - ".mb_strlen($value)."</b><br />";

//	var_dump($sentences);
foreach ($sentences as $key => $sentence) {
	echo "$sentence<br />";
$partsOfSentence = GetPartOfSernetce($sentence);

foreach ($partsOfSentence as $key2 => &$value) {
$value = makeArrayFromSentense($value, $is_word);
//var_dump($words);
}
echo "<br /><b>Слов в предложений ".($key+1)." - ".count($partsOfSentence)."</b><br />";
//var_dump($partsOfSentence);
}


}

//var_dump ($paragraph);

function getSentence (string $paragraph) { //Получаем предложения

$sentences = explode(". ", $paragraph); //Делим на предложения
foreach ($sentences as $value) {
	$replace = "<b>".mb_strimwidth("$value", 0, 1)."</b>"; //mb_substr
$sentences = str_replace(mb_strimwidth($value, 0, 1), $replace, $value);

$replace = array("<span style='color:red';>HTML</span>", "<span style='color:red';>PHP</span>", "<span style='color:red';>ASP</span>", "<span style='color:red';>ASP.NET</span>", "<span style='color:red';>Java</span>");
$sentences2 = str_replace(array("HTML", "PHP", "ASP", "ASP.NET", "Java"), $replace, $sentences);



}
return (array)$sentences2;
}


function GetPartOfSernetce (string $sentence) {

$partsOfSentence = explode(" ", $sentence);
//var_dump($partsOfSentences);
return (array)$partsOfSentence;

}



















//var_dump($parts);


echo "<br /><br /><br />Количество абзацев - ".count($paragraphes)."<br />";


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

//$aaa = array_diff($aaa, array(''));
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
//str_split
{
    function mb_str_replace($needle, $replace_text, $haystack) {
        return implode($replace_text, mb_split($needle, $haystack));
    }
}

$str = 'привет ВАНЯ';
echo mb_str_replace('ваня', 'петя', $str);
