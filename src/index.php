<?php

require_once __DIR__.'/../vendor/autoload.php';

if(isset($_GET['objeto']) and isset($_GET['metodo']) ) {

	$objeto = ucfirst($_GET['objeto']);
	$metodo = $_GET['metodo'];

	if(class_exists($objeto)) {
		$objeto = new $objeto();
		$objeto->$metodo();
	}
	else
		echo 'objeto nao encontrado';
}
else
	echo 'parametros nao enviados';