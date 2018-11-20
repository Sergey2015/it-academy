<?php
$s='Zend Framework 2 is an open source framework for developing web applications and services using PHP 5.3+. Zend Framework 2 uses 100% object-oriented code and utilises most of the new features of PHP 5.3, namely namespaces, late static binding, lambda functions and closures.
Zend Framework 2 evolved from Zend Framework 1, a successful PHP framework with over 15 million downloads.
The component structure of Zend Framework 2 is unique; each component is designed with few dependencies on other components. ZF2 follows the SOLID object oriented design principle. This loosely coupled architecture allows developers to use whichever components they want. We call this a «use-at-will» design. We support Pyrus and Composer as installation and dependency tracking mechanisms for the framework as a whole and for each component, further enhancing this design.
We use PHPUnit to test our code and Travis CI as a Continuous Integration service.
While they can be used separately, Zend Framework 2 components in the standard library form a powerful and extensible web application framework when combined. Also, it offers a robust, high performance MVC implementation, a database abstraction that is simple to use, and a forms component that implements HTML5 form rendering, validation, and filtering so that developers can consolidate all of these operations using one easy-to-use, object oriented interface. Other components, such as Zend\Authentication and Zend\Permissions\Acl, provide user authentication and authorization against all common credential stores.';
$array = explode("\n", $s);
//var_dump($array);

foreach ($array as &$paragraph) {
	$paragraph = str_replace(['!','?'], ".", $paragraph)." ";	
	$paragraph = explode(". ", $paragraph);
	$lenght = count($paragraph);
	for ($i=0; $i < $lenght; $i++) { 
		if (empty($paragraph[$i])) {
			unset($paragraph[$i]);
		}


	}
	//var_dump($paragraph);
	foreach ($paragraph as &$sentence) {
		var_dump($sentence);
		$sentence = str_word_count($sentence, 1, '%');

	}
	

}
var_dump($array);

