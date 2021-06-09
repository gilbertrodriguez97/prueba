<?php

/**
 * 
 */
require_once 'controllers/error.php';
class App{
	
	function __construct(){

	echo "<p>Hola, perros. Este es el construction de app :v</p>";

	$URL = $_GET['url'];
	$URL = rtrim($URL, '/');
	$URL = explode('/', $URL);

	$archivocontroller = 'controllers/' . $URL[0] . '.php';

	if (file_exists($archivocontroller)) {
		require_once $archivocontroller;
		$controller = new $URL[0];
			if (isset($URL[1])){
				$controller->{$URL[1]}();
			}
		}else{
		$controller = new Error_();
		}
	
	}
}



?>