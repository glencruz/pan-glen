<?php 
	
	require('vendor/autoload.php');

	define('RUTA','http://localhost/ejercicio/');


	

	$favicon = "<link rel='icon' type='image/png' href='http://localhost/ejercicio/favicon-pan.png' />";

	#CSS

	$normalize_css = '<link rel="stylesheet" href="'.RUTA.'css/normalize.min.css">';

	$boostrap_v4_css = '<link rel="stylesheet" href="'.RUTA.'css/bootstrap.min.css">';

	$font_awesome_css = '<link rel="stylesheet" href="'.RUTA.'css/all.css">';

	

	#JS
	
	$jquery_js = '<script src="'.RUTA.'js/jquery-3.2.1.min.js"></script>';


	$bootstrap_v4_js = '<script src="'.RUTA.'js/bootstrap.min.js"></script>';


	$font_awesome_js = '<script src="'.RUTA.'js/all.js"></script>';

	
	#Own 
	#	js
		$own_file_js = '<script src="'.RUTA.'js/ejercicio.js"></script>';
	#	css
		$own_file_css = '<link rel="stylesheet" href="'.RUTA.'css/ejercicio.min.css">';
	

	

?>