<?php

	//define('CLASS_DIR', 'src/');


	$dir = function($class){
		  $teste = dirname(__DIR__) . '/poo-clientes/src';
		  //var_dump($class); die;
	
		  $path = str_replace('\\', '/',$class);
		  $filename = $teste . '/'. $path. '.php';
			
		  if (file_exists($filename)) {
		  	require $filename;
		  }


	};
	spl_autoload_register($dir);
