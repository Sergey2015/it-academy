<?php
define("PARAGRAPHPREPAGE", 10);
$text = file('text_windows1251.txt');//Считываем полный текст файла в переменную $text
$paragraphCount = count($text);
$pagesCount = ceil($paragraphCount / PARAGRAPHPREPAGE);
$pageNumber = 1;
if (isset($_GET['page'])) {
	$pageNumber = intval($_GET['page']);
}
if ($pageNumber < 1 || $pageNumber > $pagesCount) {
	die('Страница не найдена');
}
// echo "$pageNumber<br>";
// echo "$pagesCount";
$startNumber = ($pageNumber -1) * PARAGRAPHPREPAGE;
$pageArray = array_slice($text, $startNumber, PARAGRAPHPREPAGE);
foreach ($pageArray as $paragraph) {
	$paragraph = mb_convert_encoding($paragraph, 'utf-8', 'Windows-1251');
	echo "$paragraph<br>";
}
for ($i=1; $i <=$pagesCount ; $i++) {
	if ($i == $pageNumber) {
		echo "$i ";
	} else {
		echo "<a href=\"{$_SERVER['SCRIPT_NAME']}?page=$i\">$i</a> ";


	}
}

//var_dump($_SERVER);

//var_dump($text);
exit();